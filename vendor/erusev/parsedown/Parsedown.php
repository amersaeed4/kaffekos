<?php

#
#
# Parsedown
# http://parsedown.org
#
# (c) Emanuil Rusev
# http://erusev.com
#
# For the full license information, view the LICENSE file that was distributed
# with this source code.
#
#

class Parsedown
{
    # ~

    const version = '2.0.0-grav';

    # ~

    function text($text)
    {
        # make sure no definitions are set
        $this->DefinitionData = [];

        # standardize line breaks
        $text = str_replace(["\r\n", "\r"], "\n", $text);

        # remove surrounding line breaks
        $text = trim($text, "\n");

        # split text into lines
        $lines = explode("\n", $text);

        # iterate through lines to identify blocks
        $markup = $this->lines($lines);

        # trim line breaks
        $markup = trim((string) $markup, "\n");

        return $markup;
    }

    #
    # Setters
    #

    function setBreaksEnabled($breaksEnabled): self
    {
        $this->breaksEnabled = $breaksEnabled;

        return $this;
    }

    protected bool $breaksEnabled = false;

    function setMarkupEscaped($markupEscaped): self
    {
        $this->markupEscaped = $markupEscaped;

        return $this;
    }

    protected bool $markupEscaped = false;

    function setUrlsLinked($urlsLinked): self
    {
        $this->urlsLinked = $urlsLinked;

        return $this;
    }

    protected bool $urlsLinked = true;

    function setSafeMode($safeMode): self
    {
        $this->safeMode = (bool) $safeMode;

        return $this;
    }

    protected bool $safeMode = false;

    protected array $safeLinksWhitelist = [
        'http://',
        'https://',
        'ftp://',
        'ftps://',
        'mailto:',
        'data:image/png;base64,',
        'data:image/gif;base64,',
        'data:image/jpeg;base64,',
        'irc:',
        'ircs:',
        'git:',
        'ssh:',
        'news:',
        'steam:',
    ];

    #
    # Lines
    #

    protected array $BlockTypes = [
        '#' => ['Header'],
        '*' => ['Rule', 'List'],
        '+' => ['List'],
        '-' => ['SetextHeader', 'Table', 'Rule', 'List'],
        '0' => ['List'],
        '1' => ['List'],
        '2' => ['List'],
        '3' => ['List'],
        '4' => ['List'],
        '5' => ['List'],
        '6' => ['List'],
        '7' => ['List'],
        '8' => ['List'],
        '9' => ['List'],
        ':' => ['Table'],
        '<' => ['Comment', 'Markup'],
        '=' => ['SetextHeader'],
        '>' => ['Quote'],
        '[' => ['Reference'],
        '_' => ['Rule'],
        '`' => ['FencedCode'],
        '|' => ['Table'],
        '~' => ['FencedCode'],
    ];

    # ~

    protected array $unmarkedBlockTypes = [
        'Code',
    ];

    #
    # Blocks
    #

    protected function lines(array $lines): string
    {
        $CurrentBlock = null;

        foreach ($lines as $line)
        {
            if (chop((string) $line) === '')
            {
                if (isset($CurrentBlock))
                {
                    $CurrentBlock['interrupted'] = true;
                }

                continue;
            }

            if (str_contains((string) $line, "\t"))
            {
                $parts = explode("\t", (string) $line);

                $line = $parts[0];

                unset($parts[0]);

                foreach ($parts as $part)
                {
                    $shortage = 4 - mb_strlen($line, 'utf-8') % 4;

                    $line .= str_repeat(' ', $shortage);
                    $line .= $part;
                }
            }

            $indent = strspn((string) $line, ' ');

            $text = $indent > 0 ? substr((string) $line, $indent) : $line;

            # ~

            $Line = ['body' => $line, 'indent' => $indent, 'text' => $text];

            # ~

            if (isset($CurrentBlock['continuable']))
            {
                $Block = $this->{'block'.$CurrentBlock['type'].'Continue'}($Line, $CurrentBlock);

                if (isset($Block))
                {
                    $CurrentBlock = $Block;

                    continue;
                }
                else
                {
                    if ($this->isBlockCompletable($CurrentBlock['type']))
                    {
                        $CurrentBlock = $this->{'block'.$CurrentBlock['type'].'Complete'}($CurrentBlock);
                    }
                }
            }

            # ~

            $marker = $text[0];

            # ~

            $blockTypes = $this->unmarkedBlockTypes;

            if (isset($this->BlockTypes[$marker]))
            {
                foreach ($this->BlockTypes[$marker] as $blockType)
                {
                    $blockTypes []= $blockType;
                }
            }

            #
            # ~

            foreach ($blockTypes as $blockType)
            {
                $Block = $this->{'block'.$blockType}($Line, $CurrentBlock);

                if (isset($Block))
                {
                    $Block['type'] = $blockType;

                    if ( ! isset($Block['identified']))
                    {
                        $Blocks []= $CurrentBlock;

                        $Block['identified'] = true;
                    }

                    if ($this->isBlockContinuable($blockType))
                    {
                        $Block['continuable'] = true;
                    }

                    $CurrentBlock = $Block;

                    continue 2;
                }
            }

            # ~

            if (isset($CurrentBlock) and ! isset($CurrentBlock['type']) and ! isset($CurrentBlock['interrupted']))
            {
                $CurrentBlock['element']['text'] .= "\n".$text;
            }
            else
            {
                $Blocks []= $CurrentBlock;

                $CurrentBlock = $this->paragraph($Line);

                $CurrentBlock['identified'] = true;
            }
        }

        # ~

        if (isset($CurrentBlock['continuable']) and $this->isBlockCompletable($CurrentBlock['type']))
        {
            $CurrentBlock = $this->{'block'.$CurrentBlock['type'].'Complete'}($CurrentBlock);
        }

        # ~

        $Blocks []= $CurrentBlock;

        unset($Blocks[0]);

        # ~

        $markup = '';

        foreach ($Blocks as $Block)
        {
            if (isset($Block['hidden']))
            {
                continue;
            }

            $markup .= "\n";
            $markup .= $Block['markup'] ?? $this->element($Block['element']);
        }

        $markup .= "\n";

        # ~

        return $markup;
    }

    protected function isBlockContinuable($Type)
    {
        return method_exists($this, 'block'.$Type.'Continue');
    }

    protected function isBlockCompletable($Type)
    {
        return method_exists($this, 'block'.$Type.'Complete');
    }

    #
    # Code

    protected function blockCode($Line, $Block = null): ?array
    {
        if (isset($Block) and ! isset($Block['type']) and ! isset($Block['interrupted']))
        {
            return null;
        }

        if ($Line['indent'] >= 4)
        {
            $text = substr((string) $Line['body'], 4);

            $Block = [
                'element' => [
                    'name' => 'pre',
                    'handler' => 'element',
                    'text' => [
                        'name' => 'code',
                        'text' => $text,
                    ],
                ],
            ];

            return $Block;
        }

        return null;
    }

    protected function blockCodeContinue($Line, $Block): ?array
    {
        if ($Line['indent'] >= 4)
        {
            if (isset($Block['interrupted']))
            {
                $Block['element']['text']['text'] .= "\n";

                unset($Block['interrupted']);
            }

            $Block['element']['text']['text'] .= "\n";

            $text = substr((string) $Line['body'], 4);

            $Block['element']['text']['text'] .= $text;

            return $Block;
        }

        return null;
    }

    protected function blockCodeComplete($Block): array
    {
        $text = $Block['element']['text']['text'];

        $Block['element']['text']['text'] = $text;

        return $Block;
    }

    #
    # Comment

    protected function blockComment($Line): ?array
    {
        if ($this->markupEscaped or $this->safeMode)
        {
            return null;
        }

        if (isset($Line['text'][3]) and $Line['text'][3] === '-' and $Line['text'][2] === '-' and $Line['text'][1] === '!')
        {
            $Block = [
                'markup' => $Line['body'],
            ];

            if (preg_match('/-->$/', $Line['text']))
            {
                $Block['closed'] = true;
            }

            return $Block;
        }

        return null;
    }

    protected function blockCommentContinue($Line, array $Block): ?array
    {
        if (isset($Block['closed']))
        {
            return null;
        }

        $Block['markup'] .= "\n" . $Line['body'];

        if (preg_match('/-->$/', (string) $Line['text']))
        {
            $Block['closed'] = true;
        }

        return $Block;
    }

    #
    # Fenced Code

    protected function blockFencedCode($Line)
    {
        if (preg_match('/^['.$Line['text'][0].']{3,}[ ]*([^`]+)?[ ]*$/', (string) $Line['text'], $matches))
        {
            $Element = [
                'name' => 'code',
                'text' => '',
            ];

            if (isset($matches[1]))
            {
                /**
                 * https://www.w3.org/TR/2011/WD-html5-20110525/elements.html#classes
                 * Every HTML element may have a class attribute specified.
                 * The attribute, if specified, must have a value that is a set
                 * of space-separated tokens representing the various classes
                 * that the element belongs to.
                 * [...]
                 * The space characters, for the purposes of this specification,
                 * are U+0020 SPACE, U+0009 CHARACTER TABULATION (tab),
                 * U+000A LINE FEED (LF), U+000C FORM FEED (FF), and
                 * U+000D CARRIAGE RETURN (CR).
                 */
                $language = substr($matches[1], 0, strcspn($matches[1], " \t\n\f\r"));

                $class = 'language-'.$language;

                $Element['attributes'] = [
                    'class' => $class,
                ];
            }

            $Block = [
                'char' => $Line['text'][0],
                'element' => [
                    'name' => 'pre',
                    'handler' => 'element',
                    'text' => $Element,
                ],
            ];

            return $Block;
        }

        return null;
    }

    protected function blockFencedCodeContinue($Line, $Block): ?array
    {
        if (isset($Block['complete']))
        {
            return null;
        }

        if (isset($Block['interrupted']))
        {
            $Block['element']['text']['text'] .= "\n";

            unset($Block['interrupted']);
        }

        if (preg_match('/^'.$Block['char'].'{3,}[ ]*$/', (string) $Line['text']))
        {
            $Block['element']['text']['text'] = substr((string) $Block['element']['text']['text'], 1);

            $Block['complete'] = true;

            return $Block;
        }

        $Block['element']['text']['text'] .= "\n".$Line['body'];

        return $Block;
    }

    protected function blockFencedCodeComplete($Block): array
    {
        $text = $Block['element']['text']['text'];

        $Block['element']['text']['text'] = $text;

        return $Block;
    }

    #
    # Header

    protected function blockHeader($Line)
    {
        if (isset($Line['text'][1]))
        {
            $level = 1;

            while (isset($Line['text'][$level]) and $Line['text'][$level] === '#')
            {
                $level ++;
            }

            if ($level > 6)
            {
                return null;
            }

            $text = trim($Line['text'], '# ');

            $Block = [
                'element' => [
                    'name' => 'h' . min(6, $level),
                    'text' => $text,
                    'handler' => 'line',
                ],
            ];

            return $Block;
        }

        return null;
    }

    #
    # List

    protected function blockList($Line): ?array
    {
        [$name, $pattern] = $Line['text'][0] <= '-' ? ['ul', '[*+-]'] : ['ol', '[0-9]+[.]'];

        if (preg_match('/^('.$pattern.'[ ]+)(.*)/', (string) $Line['text'], $matches))
        {
            $Block = [
                'indent' => $Line['indent'],
                'pattern' => $pattern,
                'element' => [
                    'name' => $name,
                    'handler' => 'elements',
                ],
            ];

            if($name === 'ol')
            {
                $listStart = stristr($matches[0], '.', true);

                if($listStart !== '1')
                {
                    $Block['element']['attributes'] = ['start' => $listStart];
                }
            }

            $Block['li'] = [
                'name' => 'li',
                'handler' => 'li',
                'text' => [
                    $matches[2],
                ],
            ];

            $Block['element']['text'] []= & $Block['li'];

            return $Block;
        }

        return null;
    }

    protected function blockListContinue($Line, array $Block): ?array
    {
        if ($Block['indent'] === $Line['indent'] and preg_match('/^'.$Block['pattern'].'(?:[ ]+(.*)|$)/', (string) $Line['text'], $matches))
        {
            if (isset($Block['interrupted']))
            {
                $Block['li']['text'] []= '';

                $Block['loose'] = true;

                unset($Block['interrupted']);
            }

            unset($Block['li']);

            $text = $matches[1] ?? '';

            $Block['li'] = [
                'name' => 'li',
                'handler' => 'li',
                'text' => [
                    $text,
                ],
            ];

            $Block['element']['text'] []= & $Block['li'];

            return $Block;
        }

        if ($Line['text'][0] === '[' and $this->blockReference($Line))
        {
            return $Block;
        }

        if ( ! isset($Block['interrupted']))
        {
            $text = preg_replace('/^[ ]{0,4}/', '', (string) $Line['body']);

            $Block['li']['text'] []= $text;

            return $Block;
        }

        if ($Line['indent'] > 0)
        {
            $Block['li']['text'] []= '';

            $text = preg_replace('/^[ ]{0,4}/', '', (string) $Line['body']);

            $Block['li']['text'] []= $text;

            unset($Block['interrupted']);

            return $Block;
        }

        return null;
    }

    protected function blockListComplete(array $Block): array
    {
        if (isset($Block['loose']))
        {
            foreach ($Block['element']['text'] as &$li)
            {
                if (end($li['text']) !== '')
                {
                    $li['text'] []= '';
                }
            }
        }

        return $Block;
    }

    #
    # Quote

    protected function blockQuote($Line): ?array
    {
        if (preg_match('/^>[ ]?(.*)/', (string) $Line['text'], $matches))
        {
            $Block = [
                'element' => [
                    'name' => 'blockquote',
                    'handler' => 'lines',
                    'text' => (array) $matches[1],
                ],
            ];

            return $Block;
        }

        return null;
    }

    protected function blockQuoteContinue($Line, array $Block): ?array
    {
        if ($Line['text'][0] === '>' and preg_match('/^>[ ]?(.*)/', (string) $Line['text'], $matches))
        {
            if (isset($Block['interrupted']))
            {
                $Block['element']['text'] []= '';

                unset($Block['interrupted']);
            }

            $Block['element']['text'] []= $matches[1];

            return $Block;
        }

        if ( ! isset($Block['interrupted']))
        {
            $Block['element']['text'] []= $Line['text'];

            return $Block;
        }

        return null;
    }

    #
    # Rule

    protected function blockRule($Line): ?array
    {
        if (preg_match('/^(['.$Line['text'][0].'])([ ]*\1){2,}[ ]*$/', (string) $Line['text']))
        {
            $Block = [
                'element' => [
                    'name' => 'hr'
                ],
            ];

            return $Block;
        }

        return null;
    }

    #
    # Setext

    protected function blockSetextHeader($Line, ?array $Block = null)
    {
        if ( ! isset($Block) or isset($Block['type']) or isset($Block['interrupted']))
        {
            return null;
        }

        if (chop((string) $Line['text'], $Line['text'][0]) === '')
        {
            $Block['element']['name'] = $Line['text'][0] === '=' ? 'h1' : 'h2';

            return $Block;
        }

        return null;
    }

    #
    # Markup

    protected function blockMarkup($Line): ?array
    {
        if ($this->markupEscaped or $this->safeMode)
        {
            return null;
        }

        if (preg_match('/^<(\w[\w-]*)(?:[ ]*'.$this->regexHtmlAttribute.')*[ ]*(\/)?>/', (string) $Line['text'], $matches))
        {
            $element = strtolower($matches[1]);

            if (in_array($element, $this->textLevelElements))
            {
                return null;
            }

            $Block = [
                'name' => $matches[1],
                'depth' => 0,
                'markup' => $Line['text'],
            ];

            $length = strlen($matches[0]);

            $remainder = substr((string) $Line['text'], $length);

            if (trim($remainder) === '')
            {
                if (isset($matches[2]) or in_array($matches[1], $this->voidElements))
                {
                    $Block['closed'] = true;

                    $Block['void'] = true;
                }
            }
            else
            {
                if (isset($matches[2]) or in_array($matches[1], $this->voidElements))
                {
                    return null;
                }

                if (preg_match('/<\/'.$matches[1].'>[ ]*$/i', $remainder))
                {
                    $Block['closed'] = true;
                }
            }

            return $Block;
        }

        return null;
    }

    protected function blockMarkupContinue($Line, array $Block): ?array
    {
        if (isset($Block['closed']))
        {
            return null;
        }

        if (preg_match('/^<'.$Block['name'].'(?:[ ]*'.$this->regexHtmlAttribute.')*[ ]*>/i', (string) $Line['text'])) # open
        {
            $Block['depth'] ++;
        }

        if (preg_match('/(.*?)<\/'.$Block['name'].'>[ ]*$/i', (string) $Line['text'], $matches)) # close
        {
            if ($Block['depth'] > 0)
            {
                $Block['depth'] --;
            }
            else
            {
                $Block['closed'] = true;
            }
        }

        if (isset($Block['interrupted']))
        {
            $Block['markup'] .= "\n";

            unset($Block['interrupted']);
        }

        $Block['markup'] .= "\n".$Line['body'];

        return $Block;
    }

    #
    # Reference

    protected function blockReference($Line): ?array
    {
        if (preg_match('/^\[(.+?)\]:[ ]*<?(\S+?)>?(?:[ ]+["\'(](.+)["\')])?[ ]*$/', (string) $Line['text'], $matches))
        {
            $id = strtolower($matches[1]);

            $Data = [
                'url' => $matches[2],
                'title' => null,
            ];

            if (isset($matches[3]))
            {
                $Data['title'] = $matches[3];
            }

            $this->DefinitionData['Reference'][$id] = $Data;

            $Block = [
                'hidden' => true,
            ];

            return $Block;
        }

        return null;
    }

    #
    # Table

    protected function blockTable($Line, ?array $Block = null)
    {
        if ( ! isset($Block) or isset($Block['type']) or isset($Block['interrupted']))
        {
            return null;
        }

        if (str_contains((string) $Block['element']['text'], '|') and chop((string) $Line['text'], ' -:|') === '')
        {
            $alignments = [];

            $divider = $Line['text'];

            $divider = trim((string) $divider);
            $divider = trim($divider, '|');

            $dividerCells = explode('|', $divider);

            foreach ($dividerCells as $dividerCell)
            {
                $dividerCell = trim($dividerCell);

                if ($dividerCell === '')
                {
                    continue;
                }

                $alignment = null;

                if ($dividerCell[0] === ':')
                {
                    $alignment = 'left';
                }

                if (str_ends_with($dividerCell, ':'))
                {
                    $alignment = $alignment === 'left' ? 'center' : 'right';
                }

                $alignments []= $alignment;
            }

            # ~

            $HeaderElements = [];

            $header = $Block['element']['text'];

            $header = trim((string) $header);
            $header = trim($header, '|');

            $headerCells = explode('|', $header);

            foreach ($headerCells as $index => $headerCell)
            {
                $headerCell = trim($headerCell);

                $HeaderElement = [
                    'name' => 'th',
                    'text' => $headerCell,
                    'handler' => 'line',
                ];

                if (isset($alignments[$index]))
                {
                    $alignment = $alignments[$index];

                    $HeaderElement['attributes'] = [
                        'style' => 'text-align: '.$alignment.';',
                    ];
                }

                $HeaderElements []= $HeaderElement;
            }

            # ~

            $Block = [
                'alignments' => $alignments,
                'identified' => true,
                'element' => [
                    'name' => 'table',
                    'handler' => 'elements',
                ],
            ];

            $Block['element']['text'] []= [
                'name' => 'thead',
                'handler' => 'elements',
            ];

            $Block['element']['text'] []= [
                'name' => 'tbody',
                'handler' => 'elements',
                'text' => [],
            ];

            $Block['element']['text'][0]['text'] []= [
                'name' => 'tr',
                'handler' => 'elements',
                'text' => $HeaderElements,
            ];

            return $Block;
        }

        return null;
    }

    protected function blockTableContinue($Line, array $Block)
    {
        if (isset($Block['interrupted']))
        {
            return null;
        }

        if ($Line['text'][0] === '|' or strpos((string) $Line['text'], '|'))
        {
            $Elements = [];

            $row = $Line['text'];

            $row = trim((string) $row);
            $row = trim($row, '|');

            preg_match_all('/(?:(\\\\[|])|[^|`]|`[^`]+`|`)+/', $row, $matches);

            foreach ($matches[0] as $index => $cell)
            {
                $cell = trim($cell);

                $Element = [
                    'name' => 'td',
                    'handler' => 'line',
                    'text' => $cell,
                ];

                if (isset($Block['alignments'][$index]))
                {
                    $Element['attributes'] = [
                        'style' => 'text-align: '.$Block['alignments'][$index].';',
                    ];
                }

                $Elements []= $Element;
            }

            $Element = [
                'name' => 'tr',
                'handler' => 'elements',
                'text' => $Elements,
            ];

            $Block['element']['text'][1]['text'] []= $Element;

            return $Block;
        }

        return null;
    }

    #
    # ~
    #

    protected function paragraph($Line): array
    {
        $Block = [
            'element' => [
                'name' => 'p',
                'text' => $Line['text'],
                'handler' => 'line',
            ],
        ];

        return $Block;
    }

    #
    # Inline Elements
    #

    protected array $InlineTypes = [
        '"' => ['SpecialCharacter'],
        '!' => ['Image'],
        '&' => ['SpecialCharacter'],
        '*' => ['Emphasis'],
        ':' => ['Url'],
        '<' => ['UrlTag', 'EmailTag', 'Markup', 'SpecialCharacter'],
        '>' => ['SpecialCharacter'],
        '[' => ['Link'],
        '_' => ['Emphasis'],
        '`' => ['Code'],
        '~' => ['Strikethrough'],
        '\\' => ['EscapeSequence'],
    ];

    # ~

    protected string $inlineMarkerList = '!"*_&[:<>`~\\';

    #
    # ~
    #

    public function line($text, $nonNestables=[]): string
    {
        $markup = '';

        $text = (string) $text;
        $markerList = $this->inlineMarkerList;

        # $excerpt is based on the first occurrence of a marker

        while ($excerpt = strpbrk($text, $markerList))
        {
            $marker = $excerpt[0];

            # the marker is the first matching character, so its offset equals
            # the length of the text strpbrk trimmed from the front
            $markerPosition = strlen($text) - strlen($excerpt);

            $Excerpt = ['text' => $excerpt, 'context' => $text];

            foreach ($this->InlineTypes[$marker] as $inlineType)
            {
                # check to see if the current inline type is nestable in the current context

                if ( ! empty($nonNestables) and in_array($inlineType, $nonNestables))
                {
                    continue;
                }

                $Inline = $this->{'inline'.$inlineType}($Excerpt);

                if ( ! isset($Inline))
                {
                    continue;
                }

                # makes sure that the inline belongs to "our" marker

                if (isset($Inline['position']) and $Inline['position'] > $markerPosition)
                {
                    continue;
                }

                # sets a default inline position

                if ( ! isset($Inline['position']))
                {
                    $Inline['position'] = $markerPosition;
                }

                # cause the new element to 'inherit' our non nestables

                foreach ($nonNestables as $non_nestable)
                {
                    $Inline['element']['nonNestables'][] = $non_nestable;
                }

                # the text that comes before the inline
                $unmarkedText = substr($text, 0, $Inline['position']);

                # compile the unmarked text
                $markup .= $this->unmarkedText($unmarkedText);

                # compile the inline
                $markup .= $Inline['markup'] ?? $this->element($Inline['element']);

                # remove the examined text
                $text = substr($text, $Inline['position'] + $Inline['extent']);

                continue 2;
            }

            # the marker does not belong to an inline

            $unmarkedText = substr($text, 0, $markerPosition + 1);

            $markup .= $this->unmarkedText($unmarkedText);

            $text = substr($text, $markerPosition + 1);
        }

        $markup .= $this->unmarkedText($text);

        return $markup;
    }

    #
    # ~
    #

    protected function inlineCode($Excerpt): ?array
    {
        $marker = $Excerpt['text'][0];

        if (preg_match('/^('.$marker.'+)[ ]*(.+?)[ ]*(?<!'.$marker.')\1(?!'.$marker.')/s', (string) $Excerpt['text'], $matches))
        {
            $text = $matches[2];
            $text = preg_replace("/[ ]*\n/", ' ', $text);

            return [
                'extent' => strlen($matches[0]),
                'element' => [
                    'name' => 'code',
                    'text' => $text,
                ],
            ];
        }

        return null;
    }

    protected function inlineEmailTag($Excerpt): ?array
    {
        if (str_contains((string) $Excerpt['text'], '>') and preg_match('/^<((mailto:)?\S+?@\S+?)>/i', (string) $Excerpt['text'], $matches))
        {
            $url = $matches[1];

            if ( ! isset($matches[2]))
            {
                $url = 'mailto:' . $url;
            }

            return [
                'extent' => strlen($matches[0]),
                'element' => [
                    'name' => 'a',
                    'text' => $matches[1],
                    'attributes' => [
                        'href' => $url,
                    ],
                ],
            ];
        }

        return null;
    }

    protected function inlineEmphasis($Excerpt): ?array
    {
        if ( ! isset($Excerpt['text'][1]))
        {
            return null;
        }

        $marker = $Excerpt['text'][0];

        if ($Excerpt['text'][1] === $marker and preg_match($this->StrongRegex[$marker], $Excerpt['text'], $matches))
        {
            $emphasis = 'strong';
        }
        elseif (preg_match($this->EmRegex[$marker], $Excerpt['text'], $matches))
        {
            $emphasis = 'em';
        }
        else
        {
            return null;
        }

        return [
            'extent' => strlen($matches[0]),
            'element' => [
                'name' => $emphasis,
                'handler' => 'line',
                'text' => $matches[1],
            ],
        ];
    }

    protected function inlineEscapeSequence($Excerpt): ?array
    {
        if (isset($Excerpt['text'][1]) and in_array($Excerpt['text'][1], $this->specialCharacters))
        {
            return [
                'markup' => $Excerpt['text'][1],
                'extent' => 2,
            ];
        }

        return null;
    }

    protected function inlineImage($Excerpt)
    {
        if ( ! isset($Excerpt['text'][1]) or $Excerpt['text'][1] !== '[')
        {
            return null;
        }

        $Excerpt['text']= substr($Excerpt['text'], 1);

        $Link = $this->inlineLink($Excerpt);

        if ($Link === null)
        {
            return null;
        }

        $Inline = [
            'extent' => $Link['extent'] + 1,
            'element' => [
                'name' => 'img',
                'attributes' => [
                    'src' => $Link['element']['attributes']['href'],
                    'alt' => $Link['element']['text'],
                ],
            ],
        ];

        $Inline['element']['attributes'] += $Link['element']['attributes'];

        unset($Inline['element']['attributes']['href']);

        return $Inline;
    }

    protected function inlineLink($Excerpt)
    {
        $Element = [
            'name' => 'a',
            'handler' => 'line',
            'nonNestables' => ['Url', 'Link'],
            'text' => null,
            'attributes' => [
                'href' => null,
                'title' => null,
            ],
        ];

        $extent = 0;

        $remainder = $Excerpt['text'];

        if (preg_match('/\[((?:[^][]++|(?R))*+)\]/', (string) $remainder, $matches))
        {
            $Element['text'] = $matches[1];

            $extent += strlen($matches[0]);

            $remainder = substr((string) $remainder, $extent);
        }
        else
        {
            return null;
        }

        if (preg_match('/^[(]\s*+((?:[^ ()]++|[(][^ )]+[)])++)(?:[ ]+("[^"]*"|\'[^\']*\'))?\s*[)]/', $remainder, $matches))
        {
            $Element['attributes']['href'] = $matches[1];

            if (isset($matches[2]))
            {
                $Element['attributes']['title'] = substr($matches[2], 1, - 1);
            }

            $extent += strlen($matches[0]);
        }
        else
        {
            if (preg_match('/^\s*\[(.*?)\]/', $remainder, $matches))
            {
                $definition = strlen($matches[1]) ? $matches[1] : $Element['text'];
                $definition = strtolower($definition);

                $extent += strlen($matches[0]);
            }
            else
            {
                $definition = strtolower($Element['text']);
            }

            if ( ! isset($this->DefinitionData['Reference'][$definition]))
            {
                return null;
            }

            $Definition = $this->DefinitionData['Reference'][$definition];

            $Element['attributes']['href'] = $Definition['url'];
            $Element['attributes']['title'] = $Definition['title'];
        }

        return [
            'extent' => $extent,
            'element' => $Element,
        ];
    }

    protected function inlineMarkup($Excerpt): ?array
    {
        if ($this->markupEscaped or $this->safeMode or !str_contains((string) $Excerpt['text'], '>'))
        {
            return null;
        }

        if ($Excerpt['text'][1] === '/' and preg_match('/^<\/\w[\w-]*[ ]*>/s', (string) $Excerpt['text'], $matches))
        {
            return [
                'markup' => $matches[0],
                'extent' => strlen($matches[0]),
            ];
        }

        if ($Excerpt['text'][1] === '!' and preg_match('/^<!---?[^>-](?:-?[^-])*-->/s', (string) $Excerpt['text'], $matches))
        {
            return [
                'markup' => $matches[0],
                'extent' => strlen($matches[0]),
            ];
        }

        if ($Excerpt['text'][1] !== ' ' and preg_match('/^<\w[\w-]*(?:[ ]*'.$this->regexHtmlAttribute.')*[ ]*\/?>/s', (string) $Excerpt['text'], $matches))
        {
            return [
                'markup' => $matches[0],
                'extent' => strlen($matches[0]),
            ];
        }

        return null;
    }

    protected function inlineSpecialCharacter($Excerpt)
    {
        if ($Excerpt['text'][0] === '&' and ! preg_match('/^&#?\w+;/', (string) $Excerpt['text']))
        {
            return [
                'markup' => '&amp;',
                'extent' => 1,
            ];
        }

        $SpecialCharacter = ['>' => 'gt', '<' => 'lt', '"' => 'quot'];

        if (isset($SpecialCharacter[$Excerpt['text'][0]]))
        {
            return [
                'markup' => '&'.$SpecialCharacter[$Excerpt['text'][0]].';',
                'extent' => 1,
            ];
        }

        return null;
    }

    protected function inlineStrikethrough($Excerpt): ?array
    {
        if ( ! isset($Excerpt['text'][1]))
        {
            return null;
        }

        if ($Excerpt['text'][1] === '~' and preg_match('/^~~(?=\S)(.+?)(?<=\S)~~/', $Excerpt['text'], $matches))
        {
            return [
                'extent' => strlen($matches[0]),
                'element' => [
                    'name' => 'del',
                    'text' => $matches[1],
                    'handler' => 'line',
                ],
            ];
        }

        return null;
    }

    protected function inlineUrl($Excerpt): ?array
    {
        if ($this->urlsLinked !== true or ! isset($Excerpt['text'][2]) or $Excerpt['text'][2] !== '/')
        {
            return null;
        }

        if (preg_match('/\bhttps?:[\/]{2}[^\s<]+\b\/*/ui', (string) $Excerpt['context'], $matches, PREG_OFFSET_CAPTURE))
        {
            $url = $matches[0][0];

            $Inline = [
                'extent' => strlen($matches[0][0]),
                'position' => $matches[0][1],
                'element' => [
                    'name' => 'a',
                    'text' => $url,
                    'attributes' => [
                        'href' => $url,
                    ],
                ],
            ];

            return $Inline;
        }

        return null;
    }

    protected function inlineUrlTag($Excerpt): ?array
    {
        if (str_contains((string) $Excerpt['text'], '>') and preg_match('/^<(\w+:\/{2}[^ >]+)>/i', (string) $Excerpt['text'], $matches))
        {
            $url = $matches[1];

            return [
                'extent' => strlen($matches[0]),
                'element' => [
                    'name' => 'a',
                    'text' => $url,
                    'attributes' => [
                        'href' => $url,
                    ],
                ],
            ];
        }

        return null;
    }

    # ~

    protected function unmarkedText($text)
    {
        $text = (string) $text;

        // Both branches only act on newlines; a single-line fragment (the common
        // case for inline text) can return immediately and skip the regex.
        if (strpos($text, "\n") === false)
        {
            return $text;
        }

        if ($this->breaksEnabled)
        {
            $text = preg_replace('/[ ]*\n/', "<br />\n", $text);
        }
        else
        {
            $text = preg_replace('/(?:[ ][ ]+|[ ]*\\\\)\n/', "<br />\n", $text);
            $text = str_replace(" \n", "\n", $text);
        }

        return $text;
    }

    #
    # Handlers
    #

    protected function element(array $Element): string
    {
        if ($this->safeMode)
        {
            $Element = $this->sanitiseElement($Element);
        }

        $markup = '<'.$Element['name'];

        if (isset($Element['attributes']))
        {
            foreach ($Element['attributes'] as $name => $value)
            {
                if ($value === null)
                {
                    continue;
                }

                $markup .= ' '.$name.'="'.self::escape($value).'"';
            }
        }

        $permitRawHtml = false;

        if (isset($Element['text']))
        {
            $text = $Element['text'];
        }
        // very strongly consider an alternative if you're writing an
        // extension
        elseif (isset($Element['rawHtml']))
        {
            $text = $Element['rawHtml'];
            $allowRawHtmlInSafeMode = isset($Element['allowRawHtmlInSafeMode']) && $Element['allowRawHtmlInSafeMode'];
            $permitRawHtml = !$this->safeMode || $allowRawHtmlInSafeMode;
        }

        if (isset($text))
        {
            $markup .= '>';

            if (isset($Element['handler']))
            {
                // Read (don't write) nonNestables: assigning to $Element here
                // would force a copy-on-write of the whole element array on
                // every node. line() is the only handler that uses the 2nd arg.
                $markup .= $this->{$Element['handler']}($text, $Element['nonNestables'] ?? []);
            }
            elseif (!$permitRawHtml)
            {
                $markup .= self::escape($text, true);
            }
            else
            {
                $markup .= $text;
            }

            $markup .= '</'.$Element['name'].'>';
        }
        else
        {
            $markup .= ' />';
        }

        return $markup;
    }

    protected function elements(array $Elements): string
    {
        $markup = '';

        foreach ($Elements as $Element)
        {
            $markup .= "\n" . $this->element($Element);
        }

        $markup .= "\n";

        return $markup;
    }

    # ~

    protected function li($lines): string
    {
        $markup = $this->lines($lines);

        $trimmedMarkup = trim((string) $markup);

        if ( ! in_array('', $lines) and str_starts_with($trimmedMarkup, '<p>'))
        {
            $markup = $trimmedMarkup;
            $markup = substr($markup, 3);

            $position = strpos($markup, "</p>");

            $markup = substr_replace($markup, '', $position, 4);
        }

        return $markup;
    }

    #
    # Deprecated Methods
    #

    function parse($text): string
    {
        $markup = $this->text($text);

        return $markup;
    }

    protected function sanitiseElement(array $Element): array
    {
        static $goodAttribute = '/^[a-zA-Z0-9][a-zA-Z0-9-_]*+$/';
        static $safeUrlNameToAtt  = [
            'a'   => 'href',
            'img' => 'src',
        ];

        if (isset($safeUrlNameToAtt[$Element['name']]))
        {
            $Element = $this->filterUnsafeUrlInAttribute($Element, $safeUrlNameToAtt[$Element['name']]);
        }

        if ( ! empty($Element['attributes']))
        {
            foreach ($Element['attributes'] as $att => $val)
            {
                # filter out badly parsed attribute
                if ( ! preg_match($goodAttribute, (string) $att))
                {
                    unset($Element['attributes'][$att]);
                }
                # dump onevent attribute
                elseif (self::striAtStart($att, 'on'))
                {
                    unset($Element['attributes'][$att]);
                }
            }
        }

        return $Element;
    }

    protected function filterUnsafeUrlInAttribute(array $Element, $attribute): array
    {
        foreach ($this->safeLinksWhitelist as $scheme)
        {
            if (self::striAtStart($Element['attributes'][$attribute], $scheme))
            {
                return $Element;
            }
        }

        $Element['attributes'][$attribute] = str_replace(':', '%3A', $Element['attributes'][$attribute]);

        return $Element;
    }

    #
    # Static Methods
    #

    protected static function escape($text, $allowQuotes = false): string
    {
        return htmlspecialchars((string) $text, $allowQuotes ? ENT_NOQUOTES : ENT_QUOTES, 'UTF-8');
    }

    protected static function striAtStart($string, $needle): bool
    {
        $len = strlen((string) $needle);

        if ($len > strlen((string) $string))
        {
            return false;
        }
        else
        {
            return strtolower(substr((string) $string, 0, $len)) === strtolower((string) $needle);
        }
    }

    public static function instance($name = 'default'): self
    {
        if (isset(self::$instances[$name]))
        {
            return self::$instances[$name];
        }

        $instance = new static();

        self::$instances[$name] = $instance;

        return $instance;
    }

    private static $instances = [];

    #
    # Fields
    #

    protected array $DefinitionData = [];

    #
    # Read-Only

    protected array $specialCharacters = [
        '\\', '`', '*', '_', '{', '}', '[', ']', '(', ')', '>', '#', '+', '-', '.', '!', '|',
    ];

    protected array $StrongRegex = [
        '*' => '/^[*]{2}((?:\\\\\*|[^*]|[*][^*]*[*])+?)[*]{2}(?![*])/s',
        '_' => '/^__((?:\\\\_|[^_]|_[^_]*_)+?)__(?!_)/us',
    ];

    protected array $EmRegex = [
        '*' => '/^[*]((?:\\\\\*|[^*]|[*][*][^*]+?[*][*])+?)[*](?![*])/s',
        '_' => '/^_((?:\\\\_|[^_]|__[^_]*__)+?)_(?!_)\b/us',
    ];

    protected string $regexHtmlAttribute = '[a-zA-Z_:][\w:.-]*(?:\s*=\s*(?:[^"\'=<>`\s]+|"[^"]*"|\'[^\']*\'))?';

    protected array $voidElements = [
        'area', 'base', 'br', 'col', 'command', 'embed', 'hr', 'img', 'input', 'link', 'meta', 'param', 'source',
    ];

    protected array $textLevelElements = [
        'a', 'br', 'bdo', 'abbr', 'blink', 'nextid', 'acronym', 'basefont',
        'b', 'em', 'big', 'cite', 'small', 'spacer', 'listing',
        'i', 'rp', 'del', 'code',          'strike', 'marquee',
        'q', 'rt', 'ins', 'font',          'strong',
        's', 'tt', 'kbd', 'mark',
        'u', 'xm', 'sub', 'nobr',
                   'sup', 'ruby',
                   'var', 'span',
                   'wbr', 'time',
    ];
}

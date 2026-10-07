# Kaffekos website: Editing Guide

Everything on the website is edited from a browser. No coding, no developer.

**Admin panel:** `https://kaffekos.pk/admin` (locally: `http://localhost/kaffekos1/admin`)
Log in with your admin account. After every change, click **Save**. The change is live immediately.

> The admin is Grav's new "Admin2" panel. Menu names below (Pages, Themes, Plugins, Tools…) describe where each setting lives; if a label looks slightly different in your version, look for the same word in the left sidebar.

---

## 1. Where is everything?

| I want to change… | Go to |
|---|---|
| Phone, WhatsApp, email, address, map location | **Themes → Kaffekos → Contact & Location** |
| Opening hours (also drives the "Open now" badge) | **Themes → Kaffekos → Opening Hours** |
| Logo, favicon, name/tagline, header button, announcement bar | **Themes → Kaffekos → Brand & Logo** |
| Brand colours | **Themes → Kaffekos → Colours** |
| Instagram / Facebook / TikTok / YouTube / LinkedIn links | **Themes → Kaffekos → Social Media** |
| Footer text, currency on the menu | **Themes → Kaffekos → Footer & Shop** |
| Home page headline, photos, sections | **Pages → Home** (one tab per section) |
| Our Story page | **Pages → Our Story** |
| Menu items, prices, categories | **Pages → Menu** (see below) |
| Photos | **Pages → Gallery** |
| Events, activities & news | **Pages → Events** |
| Contact page texts | **Pages → Contact** |
| Where contact messages are emailed | **Plugins → Email → "To" address** |

Tip: in **Pages**, the pencil/edit opens a page; the tabs across the top group the settings.

---

## 2. Common tasks

### Change a price or add a menu item
1. **Pages → Menu →** click a category (e.g. *Coffee*).
2. Open the **Menu Items** tab. Edit an item, or click **+ Add** for a new one.
3. Fill in name, price (just the number, e.g. `650`; or text like `Small 450 / Large 600`), description.
4. **Save.**

* *Photo for an item:* first upload the photo in the category's **Page Media** (first tab), save, then pick it in the item's **Photo** field.
* *Show it on the Home page:* switch **Show on Home page** on. (Up to 6 appear in "Our favourites".)
* *Sold out:* switch **Sold out / hide** on. It disappears from the menu until you switch it back.
* *Label:* choose New / Signature / Vegetarian / Vegan / Spicy / Seasonal.

### Add or reorder a menu category (e.g. "Desserts")
1. **Pages →** click **+ Add** next to **Menu** → choose page type **Menu Category**, give it a name.
2. Reorder by dragging categories in the page list. The order there is the order on the site.
3. To hide a category, open it, then **Options** tab → switch **Published** off.

### Change the Home page photo or headline
**Pages → Home → Page & Photos** tab: upload photos to *Page Media* and save.
Then open the **1 · Hero** tab, pick the photo in **Background photo**, edit the headline, **Save**.
Photos are cropped to fit the screen: use **Which part of the photo stays visible** (top / middle / bottom) to keep the important part in view.
(Best hero photo: wide/landscape, at least 1800 px across. Phone photos are fine; the site resizes them automatically.)

### Change the Hausbrandt ("Our Coffee") section
**Pages → Home → 3 · Our Coffee**: edit the text, the three small facts, the link, or swap the pack photo (upload it to *Page Media* first; a transparent PNG looks best). The pack image comes from Hausbrandt's own website, so it's worth confirming with Hausbrandt that you may use it.

### Change the slogan under the logo
**Themes → Kaffekos → Brand & Logo → Small line under the name** (currently "Coffee, Comfort, Connection"). It also appears in the footer and the browser tab title.

### Hide a section of the Home page
Open the section's tab (e.g. **8 · Guest Reviews**) and switch **Show this section** off.

### Add gallery photos
**Pages → Gallery →** drag photos into **Page Media** → **Save**. They appear automatically.
For captions or a specific order use the **Photos & Captions** tab.

### Add an event, activity or news post
**Pages →** **+ Add** next to **Events** → page type **Event Post**. Write the title and text, choose the **Type** (Event / Activity / News), optionally fill **When** and **Where**, add a cover photo and short summary, **Save**.
Set the post's **Date** (Options tab) to the event date. Posts dated today or later appear first under **Coming up** with a green badge; older ones go under **Happened**.

**Upcoming event posters:** for a poster with text on it, set *Which part of the cover photo stays visible* to **Show the whole picture** so nothing is cut off. Extra posters/photos go in **More photos** (with captions).

**Remove an upcoming event automatically after it happens:** on the post's **Options** tab, switch on **Unpublish Date** and set it to the day after the event (e.g. event on 9 Oct → 10 Oct 00:00). The post disappears from the Events page (and its link stops working) by itself. Later, add a new post with the real photos from the event.

### "Coming up" on the Home page
Nothing to do: any **Event** or **Activity** post with today's date or a later date shows up on the Home page (below Welcome), soonest first, with a "In 2 days" label. When the event is over, or its **Unpublish Date** passes, it disappears by itself; if nothing is coming up, the section is hidden. To change its heading or how many events show: **Pages → Home → 2b · Coming Up**.

### Add a completely new page (e.g. "Catering")
**Pages → + Add** → page type **Standard Page**. It appears in the top menu automatically (the page list order = menu order).
To hide a page from the menu, open it → **Options** → switch **Visible** off.

### Change opening hours (e.g. Ramadan)
**Themes → Kaffekos → Opening Hours**. Use 24-hour times (`08:00`, `23:30`; `01:00` for 1 AM). Switch **Closed all day** on for days off.
Use *Note under the hours* for a message such as "Ramadan: 4 PM – 1 AM". Hours, the "Open now" badge, the footer, Google data and the Contact page all update together.

### Announcement bar (e.g. "Eid special: open till 2 AM")
**Themes → Kaffekos → Brand & Logo → Announcement bar** → switch on, type the text, **Save**. Switch off when done.

### Reviews on the Home page
There are no reviews yet (nothing has been invented). When you have real ones: **Pages → Home → 7 · Guest Reviews** → add them → switch the section on.

---

## 3. Contact form & email

* Messages are always **saved on the server** in `user/data/contact/` (one text file each), even if email fails.
* They are also emailed to the address in **Plugins → Email → To**. On most shared hosting the default mail works. If emails are not arriving, set **Plugins → Email → Mailer** to **SMTP** and enter your mailbox details (e.g. the `info@kaffekos.pk` mailbox: host, port 587/465, user, password).
* Send yourself a test message after going live.

---

## 4. Going live (hosting)

1. Hosting needs **PHP 8.3 or newer** with the usual extensions (gd, mbstring, curl, zip, xml, openssl). Any cPanel/Apache host works. No database needed.
2. Upload the **whole project folder** to the web root (`public_html`), including the hidden `.htaccess`.
3. Make sure `cache/`, `logs/`, `tmp/`, `backup/`, `user/data/`, `user/pages/` and `user/config/` are writable by the web server.
4. Open `https://kaffekos.pk/admin` and confirm you can log in. **Change the admin password** to a strong one (Admin → your profile).
5. Turn on **HTTPS** (free SSL in cPanel) and make sure `kaffekos.pk` redirects to it.
6. Then fill in the items in section 6 below.

## 5. Backups & safety

* **The whole site is just files.** To back up, download the `user/` folder (all content, images, settings) regularly, or use **Tools → Backups** in the admin panel.
* Before big edits you can make a backup first, so you can always go back.
* Never share the admin password. Create a separate admin account for each person (Accounts → Add).
* Keep Grav and plugins up to date from **Tools → Updates** in the admin panel.

## 6. Before launch: please confirm these

Taken from your Google Maps listing (please double-check them):

- [ ] **Address**: "Grand Park, Block A, Phase 1, Johar Town, Lahore" and the map pin. *Themes → Contact & Location.*
- [ ] **Opening hours**: 7 AM – 11 PM, every day. *Themes → Opening Hours.*
- [ ] **Google rating**: the Home page shows "4.8★ on Google (73 reviews)". Update the number when it changes (*Pages → Home → 2 · Welcome → Numbers*).
- [ ] **Photos**: 20 photos came from your Google Maps listing (building, interior, pastry counter, drinks, coffee tins). Some may have been uploaded by customers, not by you. Keep the ones you are happy to use, and remove or replace any others (*Pages → Gallery*). Two photos show staff or customers in the background; remove them if anyone objects.
- [ ] **Instagram photos**: not included. Instagram does not allow its photos to be pulled automatically. Download the ones you want from your own Instagram app and drop them into *Pages → Gallery*.

Still placeholders:

- [ ] **Menu items and prices** are samples. Replace with your real menu (only Cappuccino, Iced Latte and Fresh Pastries use real photos).
- [ ] **Texts** on Home and Our Story: written from your existing website wording. Adjust to your own story.
- [ ] **Phone / email / WhatsApp**: from the current kaffekos.pk page (+92 300 8480123, info@kaffekos.pk).
- [ ] **Email delivery**: send a test contact message.
- [ ] **TikTok / YouTube / LinkedIn**: icons already show in the footer (greyed out). Add the links under Social Media to activate them (Instagram and Facebook are already set).
- [ ] **Reviews section** on Home is off. Add real guest reviews if you want it.

## 7. Good to know

* **Page Media** = the photos belonging to a page. Upload there first, then pick the photo in the fields.
* Photos: JPG/PNG/WebP are best. The site automatically makes smaller, faster versions.
* Colours: *Themes → Colours*. Default colours come from the Kaffekos logo and the Norwegian flag.
* If a change doesn't appear, hard-refresh your browser (Ctrl/Cmd + Shift + R). If it still doesn't, use **Tools → Clear cache** in the admin.
* The site is fully responsive (phones, tablets, desktop) and includes search-engine data (Google "Cafe" listing details).

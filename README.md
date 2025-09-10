# Asseria Gradnja Website

Ovo je web stranica za **Asseria Gradnja** (http://asseria-gradnja.com.hr).

## 🚀 Postavljanje na GitHub Pages

1. Preimenuj glavni HTML fajl u **index.html**.
2. Na GitHubu kreiraj novi repozitorij (npr. `asseria-gradnja`).
3. Uploadaj fajl `index.html`, sve slike (`logo.png`, `pozadina.jpg`, `alat.jpg`), `manifest.json`, `service-worker.js` i **CNAME** fajl.
4. Idi u **Settings → Pages**.
5. Pod *Source* odaberi `main branch`.
6. GitHub će generirati link: `https://tvoje-korisnicko-ime.github.io/asseria-gradnja/`.

## 🌐 Vlastita domena
Ako koristiš domenu **asseria-gradnja.com.hr**:
1. U repozitoriju dodaj fajl po imenu **CNAME**.
2. U njega upiši:
   ```
   asseria-gradnja.com.hr
   ```
3. U DNS postavkama svoje domene dodaj CNAME zapis koji pokazuje na `tvoje-korisnicko-ime.github.io`.

### 📄 CNAME fajl
```
asseria-gradnja.com.hr
```

### ⚙️ Primjer DNS postavki
- **CNAME zapis**: `www` → `tvoje-korisnicko-ime.github.io`
- **A zapisi** (za root domenu): `185.199.108.153`, `185.199.109.153`, `185.199.110.153`, `185.199.111.153`

---

## 📂 Struktura projekta
```
asseria-gradnja/
│
├── index.html
├── manifest.json
├── service-worker.js
├── CNAME
├── logo.png
├── pozadina.jpg
├── alat.jpg
└── README.md
```

# Webfont Aileron

Extension permettant de charger la fonte Aileron.

Cette extension charge les fichiers webfont (format WOFF) produits par FontSquirrel.

Le nom de la fonte en CSS est : 'aileron'.

Attention: cette extension rend la fonte disponible, mais ne l'applique pas dans le CSS.

Vous pourrez les appliquer en CSS, en faisant par exemple:

```css
body {
	font-family: 'aileron', arial, sans-serif;
}
```

Ou si vous voulez l'appliquer pour les titres:

```css
h1, h2, h3, h4, h5, h6 {
	font-family: 'aileron', arial, sans-serif;
}
```

Les variantes suivantes sont disponibles:

- regular (font-weight: 400;font-style: normal;)
- bold (font-weight: 700; font-style: normal;)
- italic (font-weight: 400; font-style: italic;)
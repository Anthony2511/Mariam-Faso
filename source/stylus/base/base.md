# Base

**Éléments bruts**  
Styles de bases pour l'ensemble du projet.

Examples :

```css
html {
    background: $backgroundColor;
    font: normal 62.5%/1.25 $textFont;
}

body {
    color: $textColor;
}

a {
    color: $linkColor;
    text-decoration: none;
    transition: color .25s ease-in-out;
    &:hover {
        color: $linkHoverColor;
    }
}
```
<?php
header("Content-Type: image/svg+xml");

echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>';
?>
<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250">
    <!-- Face -->
    <circle cx="100" cy="125" r="80" fill="#f9d4a5" stroke="#e6b382" stroke-width="2" />

    <!-- Eyes -->
    <circle cx="70" cy="105" r="10" fill="#ffffff" />
    <circle cx="70" cy="105" r="4" fill="#000000" />
    <circle cx="130" cy="105" r="10" fill="#ffffff" />
    <circle cx="130" cy="105" r="4" fill="#000000" />

    <!-- Eyebrows -->
    <line x1="60" y1="90" x2="80" y2="90" stroke="#000000" stroke-width="3" stroke-linecap="round" />
    <line x1="120" y1="90" x2="140" y2="90" stroke="#000000" stroke-width="3" stroke-linecap="round" />

    <!-- Nose -->
    <path d="M100 115 Q95 135 100 135 Q105 135 100 115" fill="none" stroke="#000000" stroke-width="2" />

    <!-- Mouth -->
    <path d="M80 160 Q100 180 120 160" fill="none" stroke="#000000" stroke-width="2" />

    <!-- Ears -->
    <ellipse cx="30" cy="125" rx="10" ry="20" fill="#f9d4a5" />
    <ellipse cx="170" cy="125" rx="10" ry="20" fill="#f9d4a5" />
</svg>
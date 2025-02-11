<?php
function pluralize(string $word, int $count): string {
    if ($count === 1) {
        return $word;
    }

    // Liste des mots irréguliers
    $irregular = [
        'cheval' => 'chevaux',
        'travail' => 'travaux',
        'œil' => 'yeux',
        'ciel' => 'cieux',
        'bijou' => 'bijoux',
        'genou' => 'genoux',
        'hibou' => 'hiboux',
        'joujou' => 'joujoux',
        'pou' => 'poux'
    ];

    if (isset($irregular[$word])) {
        return $irregular[$word];
    }

    // Règles générales
    if (preg_match('/(al)$/i', $word)) {
        return preg_replace('/al$/i', 'aux', $word);
    }

    if (preg_match('/(eau|au|eu)$/i', $word)) {
        return $word . 'x';
    }

    if (preg_match('/(ou)$/i', $word) && !in_array($word, ['bijou', 'caillou', 'chou', 'genou', 'hibou', 'joujou', 'pou'])) {
        return $word . 's';
    }

    return $word . 's';
}
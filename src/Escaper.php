<?php
namespace Dbould\MarkdownEscaper;

class Escaper
{
    const MARKDOWN_CHARACTERS = [
        '\\',
        '#',
        '`',
        '*',
        '_',
        '{',
        '}',
        '[',
        ']',
        '(',
        ')',
        '+',
        '-',
        '.',
        '!',
        '~',
        '>',
    ];

    const ESCAPED_MARKDOWN_CHARACTERS = [
        '\\\\',
        '\#',
        '\`',
        '\*',
        '\_',
        '\{',
        '\}',
        '\[',
        '\]',
        '\(',
        '\)',
        '\+',
        '\-',
        '\.',
        '\!',
        '~',
        '>',
    ];

    public function escape($subject)
    {
        $escapedText = str_replace(self::MARKDOWN_CHARACTERS, self::ESCAPED_MARKDOWN_CHARACTERS, $subject);

        return $escapedText;
    }
}
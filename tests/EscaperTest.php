<?php
namespace Tests;

use Dbould\MarkdownEscaper\Escaper;
use PHPUnit\Framework\TestCase;

class EscaperTest extends TestCase
{
    public function testItEscapesACharacter()
    {
        $subject = 'The cow says #mooo';
        $expected = 'The cow says \#mooo';

        $escaper = new Escaper();
        $actual = $escaper->escape($subject);

        $this->assertEquals($expected, $actual);
    }

    public function testItEscapesMultipleCharacters()
    {
        $subject = 'The cow says #``({][+-mooo';
        $expected = 'The cow says \#\`\`\(\{\]\[\+\-mooo';

        $escaper = new Escaper();
        $actual = $escaper->escape($subject);

        $this->assertEquals($expected, $actual);
    }
}

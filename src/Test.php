<?php

/**
 * Verifies that classes are instantiated with parentheses.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

     namespace Vendor\Model;

class Test
{
    protected const PHP_VERSION = 5;

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return int
    */


    protected function getPhpVersion()
    {
        return self::PHP_VERSION;
    } // end getPhpVersion()

}

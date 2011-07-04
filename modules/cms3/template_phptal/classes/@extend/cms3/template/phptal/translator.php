<?php

namespace CMS3\Template;

use CMS3\Engine\Exception;
use CMS3\Engine\HTML;

require_once \CMS3::find_file('vendor', 'phptal/PHPTAL/TranslationService');
 
class Phptal_Translator implements \PHPTAL_TranslationService {

	private $_vars = array();
	
	public function translate($key, $htmlescape = true)
	{
        $value = __($key);

        if ($htmlescape) {
            $value = HTML::chars($value);
        }
        while (preg_match('/\${(.*?)\}/sm', $value, $m))
        {
            list($src, $var) = $m;
            if (! array_key_exists($var, $this->_vars))
            {
                throw new Exception('Interpolation error. Translation uses ${'.$var.'}, which is not defined in the template (via i18n:name)');
            }
            $value = str_replace($src, $this->_vars[$var], $value);
        }
        return $value;
    }
	
	public function setLanguage(/*...*/)
    {
    }
    
    public function setEncoding($encoding)
    {
    }
    
    public function useDomain($domain)
    {
    }
    
    public function setVar($key, $value)
    {
        $this->_vars[$key] = $value;
    }
}

<?php
    
    function entitize($str) 
    {
		$obfuscated = "";							
		$len = strlen($str);		
		for ($n = 0; $n < $len; ++$n) 
		{
			$obfuscated .= "&#".ord($str{$n}).";";
		}
		return $obfuscated;
	}

    $filename = $_SERVER['SCRIPT_FILENAME'];
    $strLastUpdated =  date ("F d Y H:i:s", filemtime($filename));
	// another change here
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>hco.pe | cv</title>
        <link rel=StyleSheet href="styles_screen.css" type="text/css" media=screen>
        
    </head>
    <body>
        <ul id="cv">
            <li class="header"><h1>cv.hco.pe</h1></li>
            <li class="section"><h2>DETAILS</h2></li>
            <ul class="info">
                <li>Howard Cope</li>
                <li>100B Earlham Road</li>
                <li>Norwich</li>
                <li>NR2 3HB </li>
                <li>DOB: 22nd September 1963</li>
                
                <li>m: +44 (0) 7905 411 655</li>
                <li>e: <a href="<?php echo entitize('mailto:msg@hco.pe') ?> "><?php echo entitize("msg@hco.pe") ?></a></li>
            </ul>
            <li class="section"><h2>CHRONOLOGY</h2></li>
            <ul class="info">
                <li><strong>2011 - Present:</strong> Bloomberg TV - vizrt realtime data graphics & systems specialist</li>
                <li><strong>2007 - 2011:</strong> Spotted Zebra Ltd - Graphic designer/programmer/vizrt consultant/webmaster</li>
                <li><strong>2001 - 2006:</strong> Accent Design Group - Internet designer/programmer, Illustrator</li>
                <li><strong>1998 - 2001:</strong> Anglia Campus - Internet Graphic Design, CD ROM Design & Authoring</li>
                <li><strong>1997 - 1998:</strong> Anglia Interactive - Internet Graphic Design</li>
                <li><strong>1995 - 1997:</strong> Anglia Multimedia - CD ROM Graphic Design</li>
                <li><strong>1994 - 1995:</strong> Arnatt Abrey Design (Corporate Design) - Print & Annual Report design</li>
                <li><strong>1991 - 1994:</strong> BA(Hons) Graphic Design 2.1 - Norfolk Institute of Art and Design</li>
                <li><strong>1989 - 1991:</strong> BTech National Diploma Graphic Design - N E Essex School of Art and Design</li>
            </ul>
            <li class="section"><h2>DISCIPLINES</h2></li>
            <ul class="info">
                <li>viz|rt realtime broadcast graphics systems</li>
                <li>Interface Design and programming</li>
                <li>Web Accessibility issues</li>
                <li>CSS</li>
                <li>Internet Design</li>
                <li>Database Design and Programming</li>
                <li>Print Design</li>
                <li>Illustration</li>
                <li>Multimedia CD ROM Graphic Design, Interface Design and Authoring</li>
                <li>Digital Video Editing</li>
                <li>2D + 3D Animation</li>
                <li>Typography</li>
            </ul>
            
            <li class="section"><h2>SOFTWARE</h2></li>
            <ul class="info">
                <li>Info Item</li>               
            </ul>
            
            <li class="section"><h2>SKILLS</h2></li>
            <ul class="info">
                <li>Info Item</li>               
            </ul>
            
            <li class="section"><h2>PROJECTS</h2></li>
            <ul class="info">
                <li class="subsection"><h3>Bloomberg TV<h3></li>  
                <li>Info Item</li>  
                <li class="subsection"><h3>Spotted Zebra Ltd<h3></li>  
                <li>www.spotted-zebra.com website - CSS, Javascript, database design, CMS design and programming including multi user timesheet system (PHP, MySQL)</li>  
                <li>Blackberry - Control interface for Ventuz presentation using C# & MS Access DB</li>  
                <li>Siemens - Control interface for Ventuz using C# & MS Access DB</li>  
                <li>TV2 Odense, Denmark - Creation of touchscreen solutions and realtime election graphics, onsite in Odense
                <p>http://www.youtube.com/watch?v=kgKP9VaWBl0</p>
                <p>http://www.youtube.com/watch?v=xnwKI7GAEB4</p>
                </li>  
                <li>CNBC Africa - Financial realtime data graphics onsite in Johannesburg</li>  
                <li>VIASAT4, Norway - conversion of concept artwork in to viz graphics/transition logic scenes for newly starting Norwegian satellite news channel - 2 weeks start to finish onsite in Oslo</li>  
                <li>Info Item</li>  
                <li>Info Item</li>  
                <li>Info Item</li>  
                <li class="subsection"><h3>Info Subsection<h3></li>  
                <li>Info Item</li>  
                <li>Info Item</li>  
                <li>Info Item</li>               
            </ul>
            
            <li class="section"><h2>INTERESTS</h2></li>
            <ul class="info">
                <li>Info Item</li>               
            </ul>
            
            <li class="section"><h2>SECTION TITLE</h2></li>
            <ul class="info">
                <li>Info Item</li>               
            </ul>
            
            <li class="section"><h2>SECTION TITLE</h2></li>
            <ul class="info">
                <li>Info Item</li>               
            </ul>
            
        </ul>
        
    </body>
</html>

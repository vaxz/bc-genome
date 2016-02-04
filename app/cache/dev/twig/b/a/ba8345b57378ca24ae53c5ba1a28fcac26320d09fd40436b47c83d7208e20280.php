<?php

/* ::layout.html.twig */
class __TwigTemplate_ba8345b57378ca24ae53c5ba1a28fcac26320d09fd40436b47c83d7208e20280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b13254a5666517ab106b4f3ba0b6ded3669d7ed84e25d0302cdc50a07f8e39a = $this->env->getExtension("native_profiler");
        $__internal_3b13254a5666517ab106b4f3ba0b6ded3669d7ed84e25d0302cdc50a07f8e39a->enter($__internal_3b13254a5666517ab106b4f3ba0b6ded3669d7ed84e25d0302cdc50a07f8e39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
    \t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>

    <body>
        <header>
            ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "       </header>
    
    \t<div class=\"container\" >
    \t    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        </div>
    
        <footer>
    \t    Website designed in the research unit : UMR 5240, team : Génomique fonctionnelle des phytopathogènes fongiques<br>
    \t    Authors : Isabelle Gonçalves et Xavier Sottiaux<br>
    \t    Version : 0.1.0
        </footer>
    </body> 
</html>
";
        
        $__internal_3b13254a5666517ab106b4f3ba0b6ded3669d7ed84e25d0302cdc50a07f8e39a->leave($__internal_3b13254a5666517ab106b4f3ba0b6ded3669d7ed84e25d0302cdc50a07f8e39a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd830d4cafc13f328d651f7d2404bf0cc2a288613afc46f6ca85b6abcd1b38d5 = $this->env->getExtension("native_profiler");
        $__internal_cd830d4cafc13f328d651f7d2404bf0cc2a288613afc46f6ca85b6abcd1b38d5->enter($__internal_cd830d4cafc13f328d651f7d2404bf0cc2a288613afc46f6ca85b6abcd1b38d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " bcGen ";
        
        $__internal_cd830d4cafc13f328d651f7d2404bf0cc2a288613afc46f6ca85b6abcd1b38d5->leave($__internal_cd830d4cafc13f328d651f7d2404bf0cc2a288613afc46f6ca85b6abcd1b38d5_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2744b985796f30348be7f7f17723106e40f72652e4900bf53e486e605e3476b9 = $this->env->getExtension("native_profiler");
        $__internal_2744b985796f30348be7f7f17723106e40f72652e4900bf53e486e605e3476b9->enter($__internal_2744b985796f30348be7f7f17723106e40f72652e4900bf53e486e605e3476b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bcgenmain/css/bcGen.css"), "html", null, true);
        echo "\" type = \"text/css\" />
        ";
        
        $__internal_2744b985796f30348be7f7f17723106e40f72652e4900bf53e486e605e3476b9->leave($__internal_2744b985796f30348be7f7f17723106e40f72652e4900bf53e486e605e3476b9_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_1707111b28e089681a796fb7f9ff3ac869e66561532528e165c115251e7c14ae = $this->env->getExtension("native_profiler");
        $__internal_1707111b28e089681a796fb7f9ff3ac869e66561532528e165c115251e7c14ae->enter($__internal_1707111b28e089681a796fb7f9ff3ac869e66561532528e165c115251e7c14ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "                  <h1>Bc Gen</h1>
    \t    ";
        
        $__internal_1707111b28e089681a796fb7f9ff3ac869e66561532528e165c115251e7c14ae->leave($__internal_1707111b28e089681a796fb7f9ff3ac869e66561532528e165c115251e7c14ae_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_42d94f6c788f6db53972b4047e7d9bf35c78a99de3a71d22224be17f9037e349 = $this->env->getExtension("native_profiler");
        $__internal_42d94f6c788f6db53972b4047e7d9bf35c78a99de3a71d22224be17f9037e349->enter($__internal_42d94f6c788f6db53972b4047e7d9bf35c78a99de3a71d22224be17f9037e349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    \t    ";
        
        $__internal_42d94f6c788f6db53972b4047e7d9bf35c78a99de3a71d22224be17f9037e349->leave($__internal_42d94f6c788f6db53972b4047e7d9bf35c78a99de3a71d22224be17f9037e349_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 23,  114 => 22,  106 => 17,  100 => 16,  90 => 10,  84 => 9,  72 => 7,  56 => 24,  54 => 22,  49 => 19,  47 => 16,  41 => 12,  39 => 9,  34 => 7,  26 => 1,);
    }
}

<?php

/* ::layout.html.twig */
class __TwigTemplate_9d9120e1ec3feb4293193b8212522aae9b338805cb255dfa5ea7247a66b4e396 extends Twig_Template
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
        $__internal_b393da24208707ac9c8cca990cdd82799f2d32f6d5deab8b0ff5ca93238242de = $this->env->getExtension("native_profiler");
        $__internal_b393da24208707ac9c8cca990cdd82799f2d32f6d5deab8b0ff5ca93238242de->enter($__internal_b393da24208707ac9c8cca990cdd82799f2d32f6d5deab8b0ff5ca93238242de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_b393da24208707ac9c8cca990cdd82799f2d32f6d5deab8b0ff5ca93238242de->leave($__internal_b393da24208707ac9c8cca990cdd82799f2d32f6d5deab8b0ff5ca93238242de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfd2aecb9d22e5312870801c90b38cd94da3647669715345b82ab7e06cfbd749 = $this->env->getExtension("native_profiler");
        $__internal_bfd2aecb9d22e5312870801c90b38cd94da3647669715345b82ab7e06cfbd749->enter($__internal_bfd2aecb9d22e5312870801c90b38cd94da3647669715345b82ab7e06cfbd749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " bcGen ";
        
        $__internal_bfd2aecb9d22e5312870801c90b38cd94da3647669715345b82ab7e06cfbd749->leave($__internal_bfd2aecb9d22e5312870801c90b38cd94da3647669715345b82ab7e06cfbd749_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06e7a22eabb7c549f230bf84db852fe20cfa462ad27c945dc4edf8e15e7766c5 = $this->env->getExtension("native_profiler");
        $__internal_06e7a22eabb7c549f230bf84db852fe20cfa462ad27c945dc4edf8e15e7766c5->enter($__internal_06e7a22eabb7c549f230bf84db852fe20cfa462ad27c945dc4edf8e15e7766c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bcgenmain/css/bcGen.css"), "html", null, true);
        echo "\" type = \"text/css\" />
        ";
        
        $__internal_06e7a22eabb7c549f230bf84db852fe20cfa462ad27c945dc4edf8e15e7766c5->leave($__internal_06e7a22eabb7c549f230bf84db852fe20cfa462ad27c945dc4edf8e15e7766c5_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_be60759f9f41b1ea6a599f5296ec5b42af02aeb69099baee0e1a2b4beb3edfa5 = $this->env->getExtension("native_profiler");
        $__internal_be60759f9f41b1ea6a599f5296ec5b42af02aeb69099baee0e1a2b4beb3edfa5->enter($__internal_be60759f9f41b1ea6a599f5296ec5b42af02aeb69099baee0e1a2b4beb3edfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "                  <h1>Bc Gen</h1>
    \t    ";
        
        $__internal_be60759f9f41b1ea6a599f5296ec5b42af02aeb69099baee0e1a2b4beb3edfa5->leave($__internal_be60759f9f41b1ea6a599f5296ec5b42af02aeb69099baee0e1a2b4beb3edfa5_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f302df947628f9c1c83e2b8b9d06f2e629a7d750f995f5386205669579b4157 = $this->env->getExtension("native_profiler");
        $__internal_5f302df947628f9c1c83e2b8b9d06f2e629a7d750f995f5386205669579b4157->enter($__internal_5f302df947628f9c1c83e2b8b9d06f2e629a7d750f995f5386205669579b4157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    \t    ";
        
        $__internal_5f302df947628f9c1c83e2b8b9d06f2e629a7d750f995f5386205669579b4157->leave($__internal_5f302df947628f9c1c83e2b8b9d06f2e629a7d750f995f5386205669579b4157_prof);

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
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/*     <head>*/
/*     	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* */
/*         <title>{% block title %} bcGen {% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/bcgenmain/css/bcGen.css') }}" type = "text/css" />*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/*         <header>*/
/*             {% block header %}*/
/*                   <h1>Bc Gen</h1>*/
/*     	    {% endblock %}*/
/*        </header>*/
/*     */
/*     	<div class="container" >*/
/*     	    {% block body %}*/
/*     	    {% endblock %}*/
/*         </div>*/
/*     */
/*         <footer>*/
/*     	    Website designed in the research unit : UMR 5240, team : Génomique fonctionnelle des phytopathogènes fongiques<br>*/
/*     	    Authors : Isabelle Gonçalves et Xavier Sottiaux<br>*/
/*     	    Version : 0.1.0*/
/*         </footer>*/
/*     </body> */
/* </html>*/
/* */

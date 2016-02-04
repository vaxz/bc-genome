<?php

/* bcGenMainBundle:Main:homepage.html.twig */
class __TwigTemplate_db5b62a72df71e37cd6a4ec488a72cd9d5b8044084df85683806b1f74c45c410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bcGenMainBundle:Main:layout.html.twig", "bcGenMainBundle:Main:homepage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'bcGenBundleBody' => array($this, 'block_bcGenBundleBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bcGenMainBundle:Main:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a441ff01101fdf25f24560af003d3738b4491db2b72b1aaef8ce37cb7018375 = $this->env->getExtension("native_profiler");
        $__internal_1a441ff01101fdf25f24560af003d3738b4491db2b72b1aaef8ce37cb7018375->enter($__internal_1a441ff01101fdf25f24560af003d3738b4491db2b72b1aaef8ce37cb7018375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a441ff01101fdf25f24560af003d3738b4491db2b72b1aaef8ce37cb7018375->leave($__internal_1a441ff01101fdf25f24560af003d3738b4491db2b72b1aaef8ce37cb7018375_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f75fe9a95166e40b6e5322bec1b11bcf698749800c5f6a75b2cc4553b521ddc = $this->env->getExtension("native_profiler");
        $__internal_6f75fe9a95166e40b6e5322bec1b11bcf698749800c5f6a75b2cc4553b521ddc->enter($__internal_6f75fe9a95166e40b6e5322bec1b11bcf698749800c5f6a75b2cc4553b521ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Homepage
";
        
        $__internal_6f75fe9a95166e40b6e5322bec1b11bcf698749800c5f6a75b2cc4553b521ddc->leave($__internal_6f75fe9a95166e40b6e5322bec1b11bcf698749800c5f6a75b2cc4553b521ddc_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_7c1a6773602c85bd2326c05900c37726ccb95172ea34f23ae4f837601a48f735 = $this->env->getExtension("native_profiler");
        $__internal_7c1a6773602c85bd2326c05900c37726ccb95172ea34f23ae4f837601a48f735->enter($__internal_7c1a6773602c85bd2326c05900c37726ccb95172ea34f23ae4f837601a48f735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "     ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
     <h2>Homepage</h2>
";
        
        $__internal_7c1a6773602c85bd2326c05900c37726ccb95172ea34f23ae4f837601a48f735->leave($__internal_7c1a6773602c85bd2326c05900c37726ccb95172ea34f23ae4f837601a48f735_prof);

    }

    // line 12
    public function block_bcGenBundleBody($context, array $blocks = array())
    {
        $__internal_79c4ba9cba3f8cf52e722b5ac859a25b42e77f749b7199e725bee5415d00972c = $this->env->getExtension("native_profiler");
        $__internal_79c4ba9cba3f8cf52e722b5ac859a25b42e77f749b7199e725bee5415d00972c->enter($__internal_79c4ba9cba3f8cf52e722b5ac859a25b42e77f749b7199e725bee5415d00972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleBody"));

        // line 13
        echo "    
    <div class=\"form\">
        ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("bcGenMainBundle:Main:searchGene"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("bcGenMainBundle:Main:searchGenes"));
        echo "
    </div>

";
        
        $__internal_79c4ba9cba3f8cf52e722b5ac859a25b42e77f749b7199e725bee5415d00972c->leave($__internal_79c4ba9cba3f8cf52e722b5ac859a25b42e77f749b7199e725bee5415d00972c_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  79 => 15,  75 => 13,  69 => 12,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}

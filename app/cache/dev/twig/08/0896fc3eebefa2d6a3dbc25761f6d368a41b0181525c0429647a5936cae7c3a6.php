<?php

/* bcGenMainBundle:Main:page_home.html.twig */
class __TwigTemplate_51b3298a893536ef5a1f8e9c1e562d8420411534096ca2e26a4462f1e008b1a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bcGenMainBundle:Main:layout.html.twig", "bcGenMainBundle:Main:page_home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bcGenBundleHeader' => array($this, 'block_bcGenBundleHeader'),
            'bcGenBundleBody' => array($this, 'block_bcGenBundleBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bcGenMainBundle:Main:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3d5d84b61412aa0c9a91fe47acb253bc303efaf56ced3d9a48e8ee5ea7d1358 = $this->env->getExtension("native_profiler");
        $__internal_e3d5d84b61412aa0c9a91fe47acb253bc303efaf56ced3d9a48e8ee5ea7d1358->enter($__internal_e3d5d84b61412aa0c9a91fe47acb253bc303efaf56ced3d9a48e8ee5ea7d1358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:page_home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d5d84b61412aa0c9a91fe47acb253bc303efaf56ced3d9a48e8ee5ea7d1358->leave($__internal_e3d5d84b61412aa0c9a91fe47acb253bc303efaf56ced3d9a48e8ee5ea7d1358_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_3ef0218faa94e8fbc6d6aea03cd00ee45f72cff0f68bdf9590b9f8bcc8f7dd0e = $this->env->getExtension("native_profiler");
        $__internal_3ef0218faa94e8fbc6d6aea03cd00ee45f72cff0f68bdf9590b9f8bcc8f7dd0e->enter($__internal_3ef0218faa94e8fbc6d6aea03cd00ee45f72cff0f68bdf9590b9f8bcc8f7dd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Homepage ";
        
        $__internal_3ef0218faa94e8fbc6d6aea03cd00ee45f72cff0f68bdf9590b9f8bcc8f7dd0e->leave($__internal_3ef0218faa94e8fbc6d6aea03cd00ee45f72cff0f68bdf9590b9f8bcc8f7dd0e_prof);

    }

    public function block_bcGenBundleHeader($context, array $blocks = array())
    {
        $__internal_567388850319dba6e480cf7d3ef5d44f1553a4145ce61b24cab88226cb1699c0 = $this->env->getExtension("native_profiler");
        $__internal_567388850319dba6e480cf7d3ef5d44f1553a4145ce61b24cab88226cb1699c0->enter($__internal_567388850319dba6e480cf7d3ef5d44f1553a4145ce61b24cab88226cb1699c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleHeader"));

        // line 3
        $this->displayParentBlock("bcGenBundleHeader", $context, $blocks);
        echo "
<h2>Homepage</h2>
";
        
        $__internal_567388850319dba6e480cf7d3ef5d44f1553a4145ce61b24cab88226cb1699c0->leave($__internal_567388850319dba6e480cf7d3ef5d44f1553a4145ce61b24cab88226cb1699c0_prof);

    }

    // line 5
    public function block_bcGenBundleBody($context, array $blocks = array())
    {
        $__internal_8d02162c02b320bebc92ab42d20b8bcadec60bd174dbdee57dcc3320a3f35d77 = $this->env->getExtension("native_profiler");
        $__internal_8d02162c02b320bebc92ab42d20b8bcadec60bd174dbdee57dcc3320a3f35d77->enter($__internal_8d02162c02b320bebc92ab42d20b8bcadec60bd174dbdee57dcc3320a3f35d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleBody"));

        // line 6
        echo "
<div class=\"form\">";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("bcGenMainBundle:Main:searchGene"));
        // line 8
        echo " ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("bcGenMainBundle:Main:searchGenes"));
        // line 9
        echo "</div>

";
        
        $__internal_8d02162c02b320bebc92ab42d20b8bcadec60bd174dbdee57dcc3320a3f35d77->leave($__internal_8d02162c02b320bebc92ab42d20b8bcadec60bd174dbdee57dcc3320a3f35d77_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:page_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  75 => 8,  73 => 7,  70 => 6,  64 => 5,  54 => 3,  41 => 2,  11 => 1,);
    }
}
/* {% extends "bcGenMainBundle:Main:layout.html.twig" %} {% block title %}*/
/* {{ parent() }} - Homepage {% endblock %} {% block bcGenBundleHeader %}*/
/* {{ parent () }}*/
/* <h2>Homepage</h2>*/
/* {% endblock %} {% block bcGenBundleBody %}*/
/* */
/* <div class="form">{{ render(controller(*/
/* 	'bcGenMainBundle:Main:searchGene' )) }} {{ render(controller(*/
/* 	'bcGenMainBundle:Main:searchGenes' )) }}</div>*/
/* */
/* {% endblock %}*/
/* */

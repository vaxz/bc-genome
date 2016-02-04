<?php

/* bcGenMainBundle:Main:neighborhoodDisplay.html.twig */
class __TwigTemplate_17bf8c5c353cbfa0e58c3a05c5fb7a4a51c7c2a38aa6bbb2c68ebf5d5bf974f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bcGenMainBundle:Main:layout.html.twig", "bcGenMainBundle:Main:neighborhoodDisplay.html.twig", 1);
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
        $__internal_7dd50d30fd885c2fb026d6f66bdc2eb233dc68c4d1b186fd1684580323cce281 = $this->env->getExtension("native_profiler");
        $__internal_7dd50d30fd885c2fb026d6f66bdc2eb233dc68c4d1b186fd1684580323cce281->enter($__internal_7dd50d30fd885c2fb026d6f66bdc2eb233dc68c4d1b186fd1684580323cce281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:neighborhoodDisplay.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dd50d30fd885c2fb026d6f66bdc2eb233dc68c4d1b186fd1684580323cce281->leave($__internal_7dd50d30fd885c2fb026d6f66bdc2eb233dc68c4d1b186fd1684580323cce281_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f1995bef61baf0452eb22ddce0bc24a1ebe101f065a38d79519746ff529173e = $this->env->getExtension("native_profiler");
        $__internal_1f1995bef61baf0452eb22ddce0bc24a1ebe101f065a38d79519746ff529173e->enter($__internal_1f1995bef61baf0452eb22ddce0bc24a1ebe101f065a38d79519746ff529173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Neighborhood display
";
        
        $__internal_1f1995bef61baf0452eb22ddce0bc24a1ebe101f065a38d79519746ff529173e->leave($__internal_1f1995bef61baf0452eb22ddce0bc24a1ebe101f065a38d79519746ff529173e_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_0e0e87cb8e84523f431cfba16e612a7fded78b4bc5e7eccfeb8ddea821a210dc = $this->env->getExtension("native_profiler");
        $__internal_0e0e87cb8e84523f431cfba16e612a7fded78b4bc5e7eccfeb8ddea821a210dc->enter($__internal_0e0e87cb8e84523f431cfba16e612a7fded78b4bc5e7eccfeb8ddea821a210dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "     ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
     <h2>Neighborhood display</h2>
";
        
        $__internal_0e0e87cb8e84523f431cfba16e612a7fded78b4bc5e7eccfeb8ddea821a210dc->leave($__internal_0e0e87cb8e84523f431cfba16e612a7fded78b4bc5e7eccfeb8ddea821a210dc_prof);

    }

    // line 12
    public function block_bcGenBundleBody($context, array $blocks = array())
    {
        $__internal_3f15b5c95dd4ea47503cca199f35596ec59b6db7d98f4239c0325a0649a59959 = $this->env->getExtension("native_profiler");
        $__internal_3f15b5c95dd4ea47503cca199f35596ec59b6db7d98f4239c0325a0649a59959->enter($__internal_3f15b5c95dd4ea47503cca199f35596ec59b6db7d98f4239c0325a0649a59959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleBody"));

        // line 13
        echo "    
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultArray"]) ? $context["resultArray"] : $this->getContext($context, "resultArray")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["locus"]) {
            // line 15
            echo "    
\t       ";
            // line 16
            $context["locus"] = $context["locus"];
            // line 17
            echo "\t       ";
            $context["onlyOneGene"] = "";
            // line 18
            echo "\t       ";
            $context["geneNum"] = "";
            // line 19
            echo "\t       
\t      ";
            // line 20
            $this->loadTemplate("bcGenMainBundle:Main:locus.html.twig", "bcGenMainBundle:Main:neighborhoodDisplay.html.twig", 20)->display($context);
            // line 21
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    <div class=\"navigation\">
        ";
        // line 24
        echo $this->env->getExtension('knp_pagination')->render((isset($context["resultArray"]) ? $context["resultArray"] : $this->getContext($context, "resultArray")));
        echo "
    </div>

";
        
        $__internal_3f15b5c95dd4ea47503cca199f35596ec59b6db7d98f4239c0325a0649a59959->leave($__internal_3f15b5c95dd4ea47503cca199f35596ec59b6db7d98f4239c0325a0649a59959_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:neighborhoodDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 24,  125 => 22,  111 => 21,  109 => 20,  106 => 19,  103 => 18,  100 => 17,  98 => 16,  95 => 15,  78 => 14,  75 => 13,  69 => 12,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}

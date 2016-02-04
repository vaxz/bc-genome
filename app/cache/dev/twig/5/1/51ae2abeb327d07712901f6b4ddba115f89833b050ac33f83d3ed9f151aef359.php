<?php

/* bcGenMainBundle:Main:locusListDisplay.html.twig */
class __TwigTemplate_51ae2abeb327d07712901f6b4ddba115f89833b050ac33f83d3ed9f151aef359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bcGenMainBundle:Main:layout.html.twig", "bcGenMainBundle:Main:locusListDisplay.html.twig", 1);
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
        $__internal_8b983932dc0b491591d98279a2dc0c5f39fbb54fb2f76a18cbd32d6fa948b4d7 = $this->env->getExtension("native_profiler");
        $__internal_8b983932dc0b491591d98279a2dc0c5f39fbb54fb2f76a18cbd32d6fa948b4d7->enter($__internal_8b983932dc0b491591d98279a2dc0c5f39fbb54fb2f76a18cbd32d6fa948b4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:locusListDisplay.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b983932dc0b491591d98279a2dc0c5f39fbb54fb2f76a18cbd32d6fa948b4d7->leave($__internal_8b983932dc0b491591d98279a2dc0c5f39fbb54fb2f76a18cbd32d6fa948b4d7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd8d2b52cff76571d6479b63a8e6234f6a0f9ebbd17545441022f92dff00f55a = $this->env->getExtension("native_profiler");
        $__internal_dd8d2b52cff76571d6479b63a8e6234f6a0f9ebbd17545441022f92dff00f55a->enter($__internal_dd8d2b52cff76571d6479b63a8e6234f6a0f9ebbd17545441022f92dff00f55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Locus list display
";
        
        $__internal_dd8d2b52cff76571d6479b63a8e6234f6a0f9ebbd17545441022f92dff00f55a->leave($__internal_dd8d2b52cff76571d6479b63a8e6234f6a0f9ebbd17545441022f92dff00f55a_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_7f2cbae7e97bfb0cc137e7ef69f2bc0ff64f41f55c827a803a4d1251849a52b2 = $this->env->getExtension("native_profiler");
        $__internal_7f2cbae7e97bfb0cc137e7ef69f2bc0ff64f41f55c827a803a4d1251849a52b2->enter($__internal_7f2cbae7e97bfb0cc137e7ef69f2bc0ff64f41f55c827a803a4d1251849a52b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "     ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
      <h2>List Locus display</h2>
";
        
        $__internal_7f2cbae7e97bfb0cc137e7ef69f2bc0ff64f41f55c827a803a4d1251849a52b2->leave($__internal_7f2cbae7e97bfb0cc137e7ef69f2bc0ff64f41f55c827a803a4d1251849a52b2_prof);

    }

    // line 13
    public function block_bcGenBundleBody($context, array $blocks = array())
    {
        $__internal_241302de0d459745b2382bbd25f1a73d5196be502bf892386a1b327b87b378eb = $this->env->getExtension("native_profiler");
        $__internal_241302de0d459745b2382bbd25f1a73d5196be502bf892386a1b327b87b378eb->enter($__internal_241302de0d459745b2382bbd25f1a73d5196be502bf892386a1b327b87b378eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleBody"));

        // line 14
        echo "    
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultCollection"]) ? $context["resultCollection"] : $this->getContext($context, "resultCollection")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 16
            echo "         
       <p> Searched gene : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "accessionNum", array(), "array"), "html", null, true);
            echo " </p>
       ";
            // line 18
            if (twig_test_empty($this->getAttribute($context["result"], "geneId", array(), "array"))) {
                // line 19
                echo "          <h3 class=\"title\">No Gene found</h3>
       ";
            } else {
                // line 21
                echo "       \t  ";
                $context["chromosomeId"] = $this->getAttribute($context["result"], "chromosomeId", array(), "array");
                // line 22
                echo "       \t  ";
                $context["locus"] = $this->getAttribute($context["result"], "locus", array(), "array");
                // line 23
                echo "       \t  ";
                $context["locusId"] = $this->getAttribute((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")), "id", array());
                // line 24
                echo "       \t  ";
                $context["onlyOneGene"] = "";
                echo "       \t  
\t      ";
                // line 25
                $this->loadTemplate("bcGenMainBundle:Main:locus.html.twig", "bcGenMainBundle:Main:locusListDisplay.html.twig", 25)->display($context);
                // line 26
                echo "\t   ";
            }
            // line 27
            echo "\t          
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    
    <div class=\"navigation\">
        ";
        // line 31
        echo $this->env->getExtension('knp_pagination')->render((isset($context["resultCollection"]) ? $context["resultCollection"] : $this->getContext($context, "resultCollection")));
        echo "
    </div>

";
        
        $__internal_241302de0d459745b2382bbd25f1a73d5196be502bf892386a1b327b87b378eb->leave($__internal_241302de0d459745b2382bbd25f1a73d5196be502bf892386a1b327b87b378eb_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:locusListDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 31,  142 => 29,  127 => 27,  124 => 26,  122 => 25,  117 => 24,  114 => 23,  111 => 22,  108 => 21,  104 => 19,  102 => 18,  98 => 17,  95 => 16,  78 => 15,  75 => 14,  69 => 13,  58 => 9,  52 => 8,  42 => 5,  36 => 4,  11 => 1,);
    }
}

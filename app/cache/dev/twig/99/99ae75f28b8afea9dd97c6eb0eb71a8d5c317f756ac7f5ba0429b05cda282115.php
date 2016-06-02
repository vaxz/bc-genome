<?php

/* bcGenMainBundle:Main:page_neighborhood.html.twig */
class __TwigTemplate_ed120c7e4baf0d753235dfd7b4a247787203596750b8c0ab75b27182c8fc2d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bcGenMainBundle:Main:layout.html.twig", "bcGenMainBundle:Main:page_neighborhood.html.twig", 1);
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
        $__internal_f9a9357b94ede188c9d08d50f9d232bc3773b944f96b511d6b0d01c62a80e4bc = $this->env->getExtension("native_profiler");
        $__internal_f9a9357b94ede188c9d08d50f9d232bc3773b944f96b511d6b0d01c62a80e4bc->enter($__internal_f9a9357b94ede188c9d08d50f9d232bc3773b944f96b511d6b0d01c62a80e4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:page_neighborhood.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a9357b94ede188c9d08d50f9d232bc3773b944f96b511d6b0d01c62a80e4bc->leave($__internal_f9a9357b94ede188c9d08d50f9d232bc3773b944f96b511d6b0d01c62a80e4bc_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_342b03e071a55898332da10ca06c6bca725d11d2a7d939ef3f28798e48dfb86a = $this->env->getExtension("native_profiler");
        $__internal_342b03e071a55898332da10ca06c6bca725d11d2a7d939ef3f28798e48dfb86a->enter($__internal_342b03e071a55898332da10ca06c6bca725d11d2a7d939ef3f28798e48dfb86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Neighborhood display ";
        
        $__internal_342b03e071a55898332da10ca06c6bca725d11d2a7d939ef3f28798e48dfb86a->leave($__internal_342b03e071a55898332da10ca06c6bca725d11d2a7d939ef3f28798e48dfb86a_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_28a24ef6ce6b1db3ba231fa1402d802799247f70fbbd3ca27c0acbf6764707db = $this->env->getExtension("native_profiler");
        $__internal_28a24ef6ce6b1db3ba231fa1402d802799247f70fbbd3ca27c0acbf6764707db->enter($__internal_28a24ef6ce6b1db3ba231fa1402d802799247f70fbbd3ca27c0acbf6764707db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        $this->displayParentBlock("header", $context, $blocks);
        echo "
<h2>Neighborhood display</h2>
";
        
        $__internal_28a24ef6ce6b1db3ba231fa1402d802799247f70fbbd3ca27c0acbf6764707db->leave($__internal_28a24ef6ce6b1db3ba231fa1402d802799247f70fbbd3ca27c0acbf6764707db_prof);

    }

    // line 5
    public function block_bcGenBundleBody($context, array $blocks = array())
    {
        $__internal_35d226becfb7cdfdead89c4417f8fa4eaaa617d6ade2d391a07647109730f6be = $this->env->getExtension("native_profiler");
        $__internal_35d226becfb7cdfdead89c4417f8fa4eaaa617d6ade2d391a07647109730f6be->enter($__internal_35d226becfb7cdfdead89c4417f8fa4eaaa617d6ade2d391a07647109730f6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bcGenBundleBody"));

        echo " ";
        $context['_parent'] = $context;
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
            // line 6
            echo " ";
            $context["locus"] = $context["locus"];
            echo " ";
            $context["onlyOneGene"] = "";
            echo " ";
            $context["geneNum"] = "";
            // line 7
            echo " ";
            $this->loadTemplate("bcGenMainBundle:Main:module_locus.html.twig", "bcGenMainBundle:Main:page_neighborhood.html.twig", 7)->display($context);
            echo " ";
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
        // line 9
        echo "
<div class=\"navigation\">";
        // line 10
        echo $this->env->getExtension('knp_pagination')->render((isset($context["resultArray"]) ? $context["resultArray"] : $this->getContext($context, "resultArray")));
        echo "</div>

";
        
        $__internal_35d226becfb7cdfdead89c4417f8fa4eaaa617d6ade2d391a07647109730f6be->leave($__internal_35d226becfb7cdfdead89c4417f8fa4eaaa617d6ade2d391a07647109730f6be_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:page_neighborhood.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 10,  110 => 9,  94 => 7,  87 => 6,  64 => 5,  54 => 3,  41 => 2,  11 => 1,);
    }
}
/* {% extends "bcGenMainBundle:Main:layout.html.twig" %} {% block title %}*/
/* {{ parent() }} - Neighborhood display {% endblock %} {% block header %}*/
/* {{ parent () }}*/
/* <h2>Neighborhood display</h2>*/
/* {% endblock %} {% block bcGenBundleBody %} {% for locus in resultArray*/
/* %} {% set locus = locus %} {% set onlyOneGene = '' %} {% set geneNum =*/
/* '' %} {% include( 'bcGenMainBundle:Main:module_locus.html.twig' ) %} {%*/
/* endfor %}*/
/* */
/* <div class="navigation">{{ knp_pagination_render(resultArray) }}</div>*/
/* */
/* {% endblock %}*/
/* */

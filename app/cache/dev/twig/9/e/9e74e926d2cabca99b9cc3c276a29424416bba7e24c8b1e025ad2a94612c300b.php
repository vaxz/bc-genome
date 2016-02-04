<?php

/* bcGenMainBundle:Main:locus.html.twig */
class __TwigTemplate_9e74e926d2cabca99b9cc3c276a29424416bba7e24c8b1e025ad2a94612c300b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d3b9e1a4fae0628f7e13d5065c7ed285a25fb72bb0f0be2d807b1e0bfe7ffd1 = $this->env->getExtension("native_profiler");
        $__internal_9d3b9e1a4fae0628f7e13d5065c7ed285a25fb72bb0f0be2d807b1e0bfe7ffd1->enter($__internal_9d3b9e1a4fae0628f7e13d5065c7ed285a25fb72bb0f0be2d807b1e0bfe7ffd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bcGenMainBundle:Main:locus.html.twig"));

        // line 1
        echo " ";
        // line 2
        echo " ";
        // line 3
        echo "\t       
<h3 class=\"title\">
         ";
        // line 5
        if (twig_test_empty((isset($context["chromosomeId"]) ? $context["chromosomeId"] : $this->getContext($context, "chromosomeId")))) {
            echo " No chromosome found
         ";
        } else {
            // line 6
            echo " Chromosome number: ";
            echo twig_escape_filter($this->env, (isset($context["chromosomeId"]) ? $context["chromosomeId"] : $this->getContext($context, "chromosomeId")), "html", null, true);
            echo "
         ";
        }
        // line 8
        echo "         ";
        // line 9
        echo "         ";
        if (twig_test_empty((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")))) {
            echo " No Locus found
         ";
        } else {
            // line 10
            echo "  Locus number : ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")), "id", array()) % 10000), "html", null, true);
            echo "
         ";
        }
        // line 11
        echo "       
         ";
        // line 12
        echo "     
</h3>

<div class=\"locus\">
      <div class=\"locusTable\">
\t        ";
        // line 17
        $context["geneNum"] = "";
        // line 18
        echo "\t        ";
        $context["tmpName"] = "";
        // line 19
        echo "\t        ";
        $context["minKey"] = 0;
        // line 20
        echo "\t        ";
        $context["maxKey"] = 0;
        // line 21
        echo "\t        ";
        $context["nameArray"] = array(0 => "Bcin", 1 => "B051", 2 => "BC1G", 3 => "BcT4");
        // line 22
        echo "\t        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["locus"]) ? $context["locus"] : $this->getContext($context, "locus")), "locusGenes", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["gene"]) {
            // line 23
            echo "\t        
\t             ";
            // line 24
            $context["stringArray"] = twig_split_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "", 4);
            // line 25
            echo "\t              
\t\t         ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nameArray"]) ? $context["nameArray"] : $this->getContext($context, "nameArray")));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                if (($context["name"] == $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array"))) {
                    // line 27
                    echo "\t\t             ";
                    $context["maxKey"] = $context["key"];
                    // line 28
                    echo "\t\t         ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t         
\t\t         ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nameArray"]) ? $context["nameArray"] : $this->getContext($context, "nameArray")));
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
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 31
                echo "\t\t             ";
                if ((((isset($context["minKey"]) ? $context["minKey"] : $this->getContext($context, "minKey")) < $context["key"]) && ($context["key"] <= (isset($context["maxKey"]) ? $context["maxKey"] : $this->getContext($context, "maxKey"))))) {
                    // line 32
                    echo "\t\t                 <table><tbody>
\t\t\t             <tr><td></td></tr>
\t\t\t             </tbody></table>
\t\t             ";
                }
                // line 36
                echo "\t\t\t         ";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo " ";
                    $context["minKey"] = ((isset($context["maxKey"]) ? $context["maxKey"] : $this->getContext($context, "maxKey")) + 1);
                    echo " ";
                }
                echo "        
\t\t         ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t            
\t\t\t 
\t\t\t \t ";
            // line 39
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 40
                echo "\t\t\t \t       ";
                $context["tmpName"] = $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array");
                // line 41
                echo "\t\t\t           <table id=";
                echo twig_escape_filter($this->env, (isset($context["tmpName"]) ? $context["tmpName"] : $this->getContext($context, "tmpName")), "html", null, true);
                echo "><tbody>
\t\t\t     ";
            }
            // line 42
            echo "\t\t\t                   \t             
\t             
\t             ";
            // line 44
            if (((isset($context["tmpName"]) ? $context["tmpName"] : $this->getContext($context, "tmpName")) != $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array"))) {
                // line 45
                echo "\t                    </tbody></table>
\t                    ";
                // line 46
                $context["tmpName"] = $this->getAttribute((isset($context["stringArray"]) ? $context["stringArray"] : $this->getContext($context, "stringArray")), 0, array(), "array");
                echo " 
\t                    <table id=";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["tmpName"]) ? $context["tmpName"] : $this->getContext($context, "tmpName")), "html", null, true);
                echo "><tbody>
\t             ";
            }
            // line 49
            echo "\t             \t\t\t          
\t             ";
            // line 50
            if (($this->getAttribute($context["gene"], "geneRef", array()) == 1)) {
                // line 51
                echo "\t             ";
                // line 52
                echo "\t                    <tr><td><a href=\"http://fungi.ensembl.org/Botrytis_cinerea/Gene/Summary?g=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "html", null, true);
                echo "
\t                    </a></td></tr>
\t             ";
            } else {
                // line 55
                echo "\t                    <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gene"], "geneAccession", array()), "html", null, true);
                echo "</td></tr>
\t             ";
            }
            // line 57
            echo "\t             
\t             ";
            // line 58
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 59
                echo "\t                   </tbody></table>
\t                   ";
                // line 60
                $context["geneNum"] = $this->getAttribute($context["gene"], "geneAccession", array());
                // line 61
                echo "\t             ";
            }
            // line 62
            echo "\t         ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 63
            echo "\t         ";
            // line 64
            echo "\t         ";
            // line 65
            echo "\t             ";
            $context["tmpArray"] = twig_split_filter($this->env, $this->getAttribute((isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneAccession", array()), "", 4);
            // line 66
            echo "\t             <table id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tmpArray"]) ? $context["tmpArray"] : $this->getContext($context, "tmpArray")), 0, array(), "array"), "html", null, true);
            echo "><tbody>
\t                          
\t             ";
            // line 68
            if (($this->getAttribute((isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneRef", array()) == 1)) {
                // line 69
                echo "\t             ";
                // line 70
                echo "\t                    <tr><td><a href=\"http://fungi.ensembl.org/Botrytis_cinerea/Gene/Summary?g=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneAccession", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneAccession", array()), "html", null, true);
                echo "
\t                    </a></td></tr>
\t             ";
            } else {
                // line 73
                echo "\t                    <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["onlyOneGene"]) ? $context["onlyOneGene"] : $this->getContext($context, "onlyOneGene")), "geneAccession", array()), "html", null, true);
                echo "</td></tr>
\t             ";
            }
            // line 75
            echo "\t             
\t             </tbody></table>                
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gene'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t   </div>        
       ";
        // line 79
        $this->loadTemplate("bcGenMainBundle:Main:locusButton.html.twig", "bcGenMainBundle:Main:locus.html.twig", 79)->display($context);
        // line 80
        echo "</div>";
        
        $__internal_9d3b9e1a4fae0628f7e13d5065c7ed285a25fb72bb0f0be2d807b1e0bfe7ffd1->leave($__internal_9d3b9e1a4fae0628f7e13d5065c7ed285a25fb72bb0f0be2d807b1e0bfe7ffd1_prof);

    }

    public function getTemplateName()
    {
        return "bcGenMainBundle:Main:locus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 80,  295 => 79,  292 => 78,  284 => 75,  278 => 73,  269 => 70,  267 => 69,  265 => 68,  259 => 66,  256 => 65,  254 => 64,  252 => 63,  239 => 62,  236 => 61,  234 => 60,  231 => 59,  229 => 58,  226 => 57,  220 => 55,  211 => 52,  209 => 51,  207 => 50,  204 => 49,  199 => 47,  195 => 46,  192 => 45,  190 => 44,  186 => 42,  180 => 41,  177 => 40,  175 => 39,  171 => 37,  150 => 36,  144 => 32,  141 => 31,  124 => 30,  121 => 29,  114 => 28,  111 => 27,  106 => 26,  103 => 25,  101 => 24,  98 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  65 => 17,  58 => 12,  55 => 11,  49 => 10,  43 => 9,  41 => 8,  35 => 6,  30 => 5,  26 => 3,  24 => 2,  22 => 1,);
    }
}

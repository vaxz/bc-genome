<?php

/* @WebProfiler/Profiler/table.html.twig */
class __TwigTemplate_bd2fe427aa8c7bfaccbcb701fe9a15f7e7fe92855794e2bc878982e8fcb14f65 extends Twig_Template
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
        $__internal_2e13cc3bdc38b3c3015ee813b9b93436b3926eebdcdfb0c6ee11671ab83bcb1a = $this->env->getExtension("native_profiler");
        $__internal_2e13cc3bdc38b3c3015ee813b9b93436b3926eebdcdfb0c6ee11671ab83bcb1a->enter($__internal_2e13cc3bdc38b3c3015ee813b9b93436b3926eebdcdfb0c6ee11671ab83bcb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/table.html.twig"));

        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $context["key"], array(), "array")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_2e13cc3bdc38b3c3015ee813b9b93436b3926eebdcdfb0c6ee11671ab83bcb1a->leave($__internal_2e13cc3bdc38b3c3015ee813b9b93436b3926eebdcdfb0c6ee11671ab83bcb1a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  22 => 1,);
    }
}
/* <table {% if class is defined %}class='{{ class }}'{% endif %} >*/
/*     <thead>*/
/*         <tr>*/
/*             <th scope="col" style="width: 25%">Key</th>*/
/*             <th scope="col" style="width: 75%">Value</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for key in data|keys|sort %}*/
/*             <tr>*/
/*                 <th>{{ key }}</th>*/
/*                 <td><pre>{{ profiler_dump(data[key]) }}</pre></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */

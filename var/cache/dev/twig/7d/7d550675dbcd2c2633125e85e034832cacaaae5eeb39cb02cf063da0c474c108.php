<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_c4ff29327e7d64dfa61b201677646401a860ca1a4ccbb6a8d135b3b4a3c8cbe2 extends Twig_Template
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
        $__internal_688cd20a7170182821213fd3e7bc3760cb0cb0d374d5ae3f936f16c80b10f452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688cd20a7170182821213fd3e7bc3760cb0cb0d374d5ae3f936f16c80b10f452->enter($__internal_688cd20a7170182821213fd3e7bc3760cb0cb0d374d5ae3f936f16c80b10f452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_27f2bb80558b5253d0da155a3a1c56875688e30ac247bb35b17d9f93046980f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f2bb80558b5253d0da155a3a1c56875688e30ac247bb35b17d9f93046980f8->enter($__internal_27f2bb80558b5253d0da155a3a1c56875688e30ac247bb35b17d9f93046980f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_688cd20a7170182821213fd3e7bc3760cb0cb0d374d5ae3f936f16c80b10f452->leave($__internal_688cd20a7170182821213fd3e7bc3760cb0cb0d374d5ae3f936f16c80b10f452_prof);

        
        $__internal_27f2bb80558b5253d0da155a3a1c56875688e30ac247bb35b17d9f93046980f8->leave($__internal_27f2bb80558b5253d0da155a3a1c56875688e30ac247bb35b17d9f93046980f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}

<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bf816cdfe92259d477b3ee8bb6ec1357809ac26b4bf8dd1fbac12b35bffc091c extends Twig_Template
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
        $__internal_a28d90e729cbfbb45d9a21018baecfee1ddb31f61da298d279094a25e73a656f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28d90e729cbfbb45d9a21018baecfee1ddb31f61da298d279094a25e73a656f->enter($__internal_a28d90e729cbfbb45d9a21018baecfee1ddb31f61da298d279094a25e73a656f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_e59f5f4672b84df79651c58c0f762adbba592a35354c8d5b6c6783463c1a2eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59f5f4672b84df79651c58c0f762adbba592a35354c8d5b6c6783463c1a2eb5->enter($__internal_e59f5f4672b84df79651c58c0f762adbba592a35354c8d5b6c6783463c1a2eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a28d90e729cbfbb45d9a21018baecfee1ddb31f61da298d279094a25e73a656f->leave($__internal_a28d90e729cbfbb45d9a21018baecfee1ddb31f61da298d279094a25e73a656f_prof);

        
        $__internal_e59f5f4672b84df79651c58c0f762adbba592a35354c8d5b6c6783463c1a2eb5->leave($__internal_e59f5f4672b84df79651c58c0f762adbba592a35354c8d5b6c6783463c1a2eb5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

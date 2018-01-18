<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_786b0700fabc995b080326061e78781eb6804a1bb9b6771455581360fe35bbdd extends Twig_Template
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
        $__internal_e748ecd10bdc58b275e8046f7d1be2f275466ced7d9d13bc96371f00bdd673ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e748ecd10bdc58b275e8046f7d1be2f275466ced7d9d13bc96371f00bdd673ee->enter($__internal_e748ecd10bdc58b275e8046f7d1be2f275466ced7d9d13bc96371f00bdd673ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_7936279d18e3bd0a68c83e1bdb675be89ef4890f5bdeec9d1a90e8cbd1cc3085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7936279d18e3bd0a68c83e1bdb675be89ef4890f5bdeec9d1a90e8cbd1cc3085->enter($__internal_7936279d18e3bd0a68c83e1bdb675be89ef4890f5bdeec9d1a90e8cbd1cc3085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e748ecd10bdc58b275e8046f7d1be2f275466ced7d9d13bc96371f00bdd673ee->leave($__internal_e748ecd10bdc58b275e8046f7d1be2f275466ced7d9d13bc96371f00bdd673ee_prof);

        
        $__internal_7936279d18e3bd0a68c83e1bdb675be89ef4890f5bdeec9d1a90e8cbd1cc3085->leave($__internal_7936279d18e3bd0a68c83e1bdb675be89ef4890f5bdeec9d1a90e8cbd1cc3085_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

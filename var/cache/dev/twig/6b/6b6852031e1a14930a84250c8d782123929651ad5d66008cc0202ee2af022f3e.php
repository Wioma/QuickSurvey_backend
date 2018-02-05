<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3fc5736876d954c326a55e89d81e0e6923d711b536a0664fbdb8e40a0a685754 extends Twig_Template
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
        $__internal_7469e63a61fd9f0f60769547a95489bee8edb835e2c22fdab5479306a4f05883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7469e63a61fd9f0f60769547a95489bee8edb835e2c22fdab5479306a4f05883->enter($__internal_7469e63a61fd9f0f60769547a95489bee8edb835e2c22fdab5479306a4f05883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_0a3681d0ae383371362282a1c2203b04c575829fa45bb97cba6b3600719bbfa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3681d0ae383371362282a1c2203b04c575829fa45bb97cba6b3600719bbfa9->enter($__internal_0a3681d0ae383371362282a1c2203b04c575829fa45bb97cba6b3600719bbfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7469e63a61fd9f0f60769547a95489bee8edb835e2c22fdab5479306a4f05883->leave($__internal_7469e63a61fd9f0f60769547a95489bee8edb835e2c22fdab5479306a4f05883_prof);

        
        $__internal_0a3681d0ae383371362282a1c2203b04c575829fa45bb97cba6b3600719bbfa9->leave($__internal_0a3681d0ae383371362282a1c2203b04c575829fa45bb97cba6b3600719bbfa9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

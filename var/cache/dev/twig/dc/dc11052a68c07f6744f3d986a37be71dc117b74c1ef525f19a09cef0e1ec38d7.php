<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2b3786d099bd8524ccb9a257688499b3b4eabc113c018a5c30d89fccb5f66a77 extends Twig_Template
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
        $__internal_4ff4a5aec8608b5fd7b3b41305640af3005b395968d660f4f38170177b0290f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff4a5aec8608b5fd7b3b41305640af3005b395968d660f4f38170177b0290f0->enter($__internal_4ff4a5aec8608b5fd7b3b41305640af3005b395968d660f4f38170177b0290f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9bdae8a7dbb29590411de6b5ffb731331fc21bbad4fc105ac8fb314fd622fdc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdae8a7dbb29590411de6b5ffb731331fc21bbad4fc105ac8fb314fd622fdc3->enter($__internal_9bdae8a7dbb29590411de6b5ffb731331fc21bbad4fc105ac8fb314fd622fdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4ff4a5aec8608b5fd7b3b41305640af3005b395968d660f4f38170177b0290f0->leave($__internal_4ff4a5aec8608b5fd7b3b41305640af3005b395968d660f4f38170177b0290f0_prof);

        
        $__internal_9bdae8a7dbb29590411de6b5ffb731331fc21bbad4fc105ac8fb314fd622fdc3->leave($__internal_9bdae8a7dbb29590411de6b5ffb731331fc21bbad4fc105ac8fb314fd622fdc3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

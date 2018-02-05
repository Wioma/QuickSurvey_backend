<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_1f948a111eb85408be49c0d7ce0994a61eb1d8db322db6e20cd6650ebc4ab099 extends Twig_Template
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
        $__internal_a125d7bd979532ce1c93ad9353b7a003945481deafd6e1fa4503ddab11218a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a125d7bd979532ce1c93ad9353b7a003945481deafd6e1fa4503ddab11218a5c->enter($__internal_a125d7bd979532ce1c93ad9353b7a003945481deafd6e1fa4503ddab11218a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_a0aff3c9dde63d791544b0f22d2f50530aea4480e0e6b76e0b75cfb6b9f09a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0aff3c9dde63d791544b0f22d2f50530aea4480e0e6b76e0b75cfb6b9f09a9b->enter($__internal_a0aff3c9dde63d791544b0f22d2f50530aea4480e0e6b76e0b75cfb6b9f09a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a125d7bd979532ce1c93ad9353b7a003945481deafd6e1fa4503ddab11218a5c->leave($__internal_a125d7bd979532ce1c93ad9353b7a003945481deafd6e1fa4503ddab11218a5c_prof);

        
        $__internal_a0aff3c9dde63d791544b0f22d2f50530aea4480e0e6b76e0b75cfb6b9f09a9b->leave($__internal_a0aff3c9dde63d791544b0f22d2f50530aea4480e0e6b76e0b75cfb6b9f09a9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}

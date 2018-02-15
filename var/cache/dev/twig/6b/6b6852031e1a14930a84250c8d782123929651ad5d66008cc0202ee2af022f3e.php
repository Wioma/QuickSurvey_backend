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
        $__internal_644f8cb6d9c16898b99fd117b7a03fdb557cbf8edcd19d274b61dfc2f2d31c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644f8cb6d9c16898b99fd117b7a03fdb557cbf8edcd19d274b61dfc2f2d31c0b->enter($__internal_644f8cb6d9c16898b99fd117b7a03fdb557cbf8edcd19d274b61dfc2f2d31c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_d9e8ee0bcca6f0f1532009a944bb3d216babda26fc2c27007f37437f37247d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e8ee0bcca6f0f1532009a944bb3d216babda26fc2c27007f37437f37247d68->enter($__internal_d9e8ee0bcca6f0f1532009a944bb3d216babda26fc2c27007f37437f37247d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_644f8cb6d9c16898b99fd117b7a03fdb557cbf8edcd19d274b61dfc2f2d31c0b->leave($__internal_644f8cb6d9c16898b99fd117b7a03fdb557cbf8edcd19d274b61dfc2f2d31c0b_prof);

        
        $__internal_d9e8ee0bcca6f0f1532009a944bb3d216babda26fc2c27007f37437f37247d68->leave($__internal_d9e8ee0bcca6f0f1532009a944bb3d216babda26fc2c27007f37437f37247d68_prof);

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

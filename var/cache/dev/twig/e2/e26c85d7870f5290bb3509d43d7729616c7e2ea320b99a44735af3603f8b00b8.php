<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f25a7ac1e0668f0390da2afc6baadde712745547e31ac2c33913d6139bfe733a extends Twig_Template
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
        $__internal_7f16e84f2a51f9745ae8937f488f3f8795667b1fcd4d06f6acc656892a0c3d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f16e84f2a51f9745ae8937f488f3f8795667b1fcd4d06f6acc656892a0c3d50->enter($__internal_7f16e84f2a51f9745ae8937f488f3f8795667b1fcd4d06f6acc656892a0c3d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_445fe372a4d5ba3c1663858016aeecf15b276a4fed2cc0a59e232e775c97089f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445fe372a4d5ba3c1663858016aeecf15b276a4fed2cc0a59e232e775c97089f->enter($__internal_445fe372a4d5ba3c1663858016aeecf15b276a4fed2cc0a59e232e775c97089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7f16e84f2a51f9745ae8937f488f3f8795667b1fcd4d06f6acc656892a0c3d50->leave($__internal_7f16e84f2a51f9745ae8937f488f3f8795667b1fcd4d06f6acc656892a0c3d50_prof);

        
        $__internal_445fe372a4d5ba3c1663858016aeecf15b276a4fed2cc0a59e232e775c97089f->leave($__internal_445fe372a4d5ba3c1663858016aeecf15b276a4fed2cc0a59e232e775c97089f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_db7f40fdec2f18c74ab2e48f662cdfc61f40bb2481790310866fcc2b20639788 extends Twig_Template
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
        $__internal_7b78254bc9f214b3ae275c54b67b4b2480f0d65c6b8fda0ffd3f4b96e27ce694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b78254bc9f214b3ae275c54b67b4b2480f0d65c6b8fda0ffd3f4b96e27ce694->enter($__internal_7b78254bc9f214b3ae275c54b67b4b2480f0d65c6b8fda0ffd3f4b96e27ce694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_de74153add88c192f5e75fb92b12514e6cf86b3e6442bd9457c3afae822c7a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de74153add88c192f5e75fb92b12514e6cf86b3e6442bd9457c3afae822c7a6b->enter($__internal_de74153add88c192f5e75fb92b12514e6cf86b3e6442bd9457c3afae822c7a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7b78254bc9f214b3ae275c54b67b4b2480f0d65c6b8fda0ffd3f4b96e27ce694->leave($__internal_7b78254bc9f214b3ae275c54b67b4b2480f0d65c6b8fda0ffd3f4b96e27ce694_prof);

        
        $__internal_de74153add88c192f5e75fb92b12514e6cf86b3e6442bd9457c3afae822c7a6b->leave($__internal_de74153add88c192f5e75fb92b12514e6cf86b3e6442bd9457c3afae822c7a6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

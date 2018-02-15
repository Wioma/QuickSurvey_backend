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
        $__internal_4cee7973267b467de659e215a86a080d73a999b0c90157ae8b3391c22e3abc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cee7973267b467de659e215a86a080d73a999b0c90157ae8b3391c22e3abc6d->enter($__internal_4cee7973267b467de659e215a86a080d73a999b0c90157ae8b3391c22e3abc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_532b8936fec1c5443b67453bc8453731db1eea4950fb9993775a0e7d6ea65086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532b8936fec1c5443b67453bc8453731db1eea4950fb9993775a0e7d6ea65086->enter($__internal_532b8936fec1c5443b67453bc8453731db1eea4950fb9993775a0e7d6ea65086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_4cee7973267b467de659e215a86a080d73a999b0c90157ae8b3391c22e3abc6d->leave($__internal_4cee7973267b467de659e215a86a080d73a999b0c90157ae8b3391c22e3abc6d_prof);

        
        $__internal_532b8936fec1c5443b67453bc8453731db1eea4950fb9993775a0e7d6ea65086->leave($__internal_532b8936fec1c5443b67453bc8453731db1eea4950fb9993775a0e7d6ea65086_prof);

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

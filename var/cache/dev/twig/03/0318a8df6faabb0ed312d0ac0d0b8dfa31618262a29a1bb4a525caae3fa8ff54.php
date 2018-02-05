<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9335802427b6ed00b0a71bf4066c53a3d6d6c3450b3d65d6f74eb8b24826dcf9 extends Twig_Template
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
        $__internal_c2d2d77f00ba12621e99aaa97b7476eb5c7fcb202e8264af5c5a89ff1f61b235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d2d77f00ba12621e99aaa97b7476eb5c7fcb202e8264af5c5a89ff1f61b235->enter($__internal_c2d2d77f00ba12621e99aaa97b7476eb5c7fcb202e8264af5c5a89ff1f61b235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_adadf813e546cf4ec2c0a6804f1f7603fb4b57163e40e223c34d9e7c448e2982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adadf813e546cf4ec2c0a6804f1f7603fb4b57163e40e223c34d9e7c448e2982->enter($__internal_adadf813e546cf4ec2c0a6804f1f7603fb4b57163e40e223c34d9e7c448e2982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c2d2d77f00ba12621e99aaa97b7476eb5c7fcb202e8264af5c5a89ff1f61b235->leave($__internal_c2d2d77f00ba12621e99aaa97b7476eb5c7fcb202e8264af5c5a89ff1f61b235_prof);

        
        $__internal_adadf813e546cf4ec2c0a6804f1f7603fb4b57163e40e223c34d9e7c448e2982->leave($__internal_adadf813e546cf4ec2c0a6804f1f7603fb4b57163e40e223c34d9e7c448e2982_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

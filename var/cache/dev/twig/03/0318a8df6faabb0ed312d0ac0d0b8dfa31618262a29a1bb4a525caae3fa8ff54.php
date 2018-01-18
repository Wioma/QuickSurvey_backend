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
        $__internal_7a2eef18d7664083d6fa561551efd300c6e6a3c512e24d50d0c1de9fca6f76fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2eef18d7664083d6fa561551efd300c6e6a3c512e24d50d0c1de9fca6f76fb->enter($__internal_7a2eef18d7664083d6fa561551efd300c6e6a3c512e24d50d0c1de9fca6f76fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a5625c0574d8be0faf6fa643ac068fca5d0fe0c11d9adbeee4fe1c65c918e23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5625c0574d8be0faf6fa643ac068fca5d0fe0c11d9adbeee4fe1c65c918e23b->enter($__internal_a5625c0574d8be0faf6fa643ac068fca5d0fe0c11d9adbeee4fe1c65c918e23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7a2eef18d7664083d6fa561551efd300c6e6a3c512e24d50d0c1de9fca6f76fb->leave($__internal_7a2eef18d7664083d6fa561551efd300c6e6a3c512e24d50d0c1de9fca6f76fb_prof);

        
        $__internal_a5625c0574d8be0faf6fa643ac068fca5d0fe0c11d9adbeee4fe1c65c918e23b->leave($__internal_a5625c0574d8be0faf6fa643ac068fca5d0fe0c11d9adbeee4fe1c65c918e23b_prof);

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

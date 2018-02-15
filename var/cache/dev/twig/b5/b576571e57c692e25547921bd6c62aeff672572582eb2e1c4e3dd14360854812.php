<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fb2666e614112395793c6b5971081d79f2ee221491298c49417e41cb4e6755bd extends Twig_Template
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
        $__internal_ad142200f52268cf9f321a83770d1e646ed550546148dd4b8210bb8e2b3b5792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad142200f52268cf9f321a83770d1e646ed550546148dd4b8210bb8e2b3b5792->enter($__internal_ad142200f52268cf9f321a83770d1e646ed550546148dd4b8210bb8e2b3b5792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_83111165a1f954ea8c2af16d8f776e9042773aa436edecea230c2eee0c68d2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83111165a1f954ea8c2af16d8f776e9042773aa436edecea230c2eee0c68d2b1->enter($__internal_83111165a1f954ea8c2af16d8f776e9042773aa436edecea230c2eee0c68d2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ad142200f52268cf9f321a83770d1e646ed550546148dd4b8210bb8e2b3b5792->leave($__internal_ad142200f52268cf9f321a83770d1e646ed550546148dd4b8210bb8e2b3b5792_prof);

        
        $__internal_83111165a1f954ea8c2af16d8f776e9042773aa436edecea230c2eee0c68d2b1->leave($__internal_83111165a1f954ea8c2af16d8f776e9042773aa436edecea230c2eee0c68d2b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

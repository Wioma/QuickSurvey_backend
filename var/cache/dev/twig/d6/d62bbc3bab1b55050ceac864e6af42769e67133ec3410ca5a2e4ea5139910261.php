<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ef420340127860c9d98cd5ac09906d862c4a3a4064e2f4d1ddb3ce6c50364369 extends Twig_Template
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
        $__internal_26af7a368021d06bab43fabab901442944b37a022ad4ec52c2c53f7664528cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26af7a368021d06bab43fabab901442944b37a022ad4ec52c2c53f7664528cae->enter($__internal_26af7a368021d06bab43fabab901442944b37a022ad4ec52c2c53f7664528cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3019ca5355e33ce79963a09b6bee4242967f9f8393e98c1fdd82c3623de8014e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3019ca5355e33ce79963a09b6bee4242967f9f8393e98c1fdd82c3623de8014e->enter($__internal_3019ca5355e33ce79963a09b6bee4242967f9f8393e98c1fdd82c3623de8014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_26af7a368021d06bab43fabab901442944b37a022ad4ec52c2c53f7664528cae->leave($__internal_26af7a368021d06bab43fabab901442944b37a022ad4ec52c2c53f7664528cae_prof);

        
        $__internal_3019ca5355e33ce79963a09b6bee4242967f9f8393e98c1fdd82c3623de8014e->leave($__internal_3019ca5355e33ce79963a09b6bee4242967f9f8393e98c1fdd82c3623de8014e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

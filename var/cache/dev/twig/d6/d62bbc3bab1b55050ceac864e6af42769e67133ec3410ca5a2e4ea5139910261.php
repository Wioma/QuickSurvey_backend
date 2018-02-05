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
        $__internal_828979cd0c7c6e3476179bd84b117ebef57631afbaa2990d90b06beec4242626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828979cd0c7c6e3476179bd84b117ebef57631afbaa2990d90b06beec4242626->enter($__internal_828979cd0c7c6e3476179bd84b117ebef57631afbaa2990d90b06beec4242626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_60d28492d4e948d71e3b18e748b1c4fdd8dfb39b4ebd10855294eb1a2ffe849d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d28492d4e948d71e3b18e748b1c4fdd8dfb39b4ebd10855294eb1a2ffe849d->enter($__internal_60d28492d4e948d71e3b18e748b1c4fdd8dfb39b4ebd10855294eb1a2ffe849d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_828979cd0c7c6e3476179bd84b117ebef57631afbaa2990d90b06beec4242626->leave($__internal_828979cd0c7c6e3476179bd84b117ebef57631afbaa2990d90b06beec4242626_prof);

        
        $__internal_60d28492d4e948d71e3b18e748b1c4fdd8dfb39b4ebd10855294eb1a2ffe849d->leave($__internal_60d28492d4e948d71e3b18e748b1c4fdd8dfb39b4ebd10855294eb1a2ffe849d_prof);

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

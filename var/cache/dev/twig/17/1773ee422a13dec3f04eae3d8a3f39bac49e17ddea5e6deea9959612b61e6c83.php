<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_80ef642a85627284456c4cb5d262c0ee32e9a2b656639b5feff4d7846f252ca0 extends Twig_Template
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
        $__internal_44023c74f89ab5da81c76edbbed775ddf5bfa08fe4ae01d3a8c0d1f70a6a7b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44023c74f89ab5da81c76edbbed775ddf5bfa08fe4ae01d3a8c0d1f70a6a7b5e->enter($__internal_44023c74f89ab5da81c76edbbed775ddf5bfa08fe4ae01d3a8c0d1f70a6a7b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1227f26a91ef1641e5bd38f1d116690e616d239c2fc7b7eb63451d126457e8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1227f26a91ef1641e5bd38f1d116690e616d239c2fc7b7eb63451d126457e8a1->enter($__internal_1227f26a91ef1641e5bd38f1d116690e616d239c2fc7b7eb63451d126457e8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_44023c74f89ab5da81c76edbbed775ddf5bfa08fe4ae01d3a8c0d1f70a6a7b5e->leave($__internal_44023c74f89ab5da81c76edbbed775ddf5bfa08fe4ae01d3a8c0d1f70a6a7b5e_prof);

        
        $__internal_1227f26a91ef1641e5bd38f1d116690e616d239c2fc7b7eb63451d126457e8a1->leave($__internal_1227f26a91ef1641e5bd38f1d116690e616d239c2fc7b7eb63451d126457e8a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

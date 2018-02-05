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
        $__internal_0febb3718f3bf86acc36978519a7169169794434b08bf1b9d14cfa6c3116a363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0febb3718f3bf86acc36978519a7169169794434b08bf1b9d14cfa6c3116a363->enter($__internal_0febb3718f3bf86acc36978519a7169169794434b08bf1b9d14cfa6c3116a363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_41f1ce46b95d91825339158568ae3edb325614494e46d95f6ca82b372047c879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f1ce46b95d91825339158568ae3edb325614494e46d95f6ca82b372047c879->enter($__internal_41f1ce46b95d91825339158568ae3edb325614494e46d95f6ca82b372047c879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0febb3718f3bf86acc36978519a7169169794434b08bf1b9d14cfa6c3116a363->leave($__internal_0febb3718f3bf86acc36978519a7169169794434b08bf1b9d14cfa6c3116a363_prof);

        
        $__internal_41f1ce46b95d91825339158568ae3edb325614494e46d95f6ca82b372047c879->leave($__internal_41f1ce46b95d91825339158568ae3edb325614494e46d95f6ca82b372047c879_prof);

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

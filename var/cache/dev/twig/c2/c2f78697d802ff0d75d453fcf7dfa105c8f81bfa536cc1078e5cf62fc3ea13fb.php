<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f2c9e15c02e7ebe4d402da8c65790808b7d56c9b3581ee2d87bf7c4c51dc092c extends Twig_Template
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
        $__internal_ad10c650a69250689412442a826880e20c5ae68c682ee4ea4ea611e65cdfc40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad10c650a69250689412442a826880e20c5ae68c682ee4ea4ea611e65cdfc40a->enter($__internal_ad10c650a69250689412442a826880e20c5ae68c682ee4ea4ea611e65cdfc40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_07ee2502d511eceece4620be4c1b53bc026bba4738b73844ed199fedaffeb2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ee2502d511eceece4620be4c1b53bc026bba4738b73844ed199fedaffeb2bc->enter($__internal_07ee2502d511eceece4620be4c1b53bc026bba4738b73844ed199fedaffeb2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ad10c650a69250689412442a826880e20c5ae68c682ee4ea4ea611e65cdfc40a->leave($__internal_ad10c650a69250689412442a826880e20c5ae68c682ee4ea4ea611e65cdfc40a_prof);

        
        $__internal_07ee2502d511eceece4620be4c1b53bc026bba4738b73844ed199fedaffeb2bc->leave($__internal_07ee2502d511eceece4620be4c1b53bc026bba4738b73844ed199fedaffeb2bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

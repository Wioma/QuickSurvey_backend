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
        $__internal_618a4bc56362e2382ce01759423701a4dce95fa891303be31fa17901d9af516d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618a4bc56362e2382ce01759423701a4dce95fa891303be31fa17901d9af516d->enter($__internal_618a4bc56362e2382ce01759423701a4dce95fa891303be31fa17901d9af516d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a05ee602281c240a226879b992b58ccaec144d6896135ca1980b78bfce8304f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05ee602281c240a226879b992b58ccaec144d6896135ca1980b78bfce8304f6->enter($__internal_a05ee602281c240a226879b992b58ccaec144d6896135ca1980b78bfce8304f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_618a4bc56362e2382ce01759423701a4dce95fa891303be31fa17901d9af516d->leave($__internal_618a4bc56362e2382ce01759423701a4dce95fa891303be31fa17901d9af516d_prof);

        
        $__internal_a05ee602281c240a226879b992b58ccaec144d6896135ca1980b78bfce8304f6->leave($__internal_a05ee602281c240a226879b992b58ccaec144d6896135ca1980b78bfce8304f6_prof);

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

<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ed54fa6982fcd7392710714cdb214f4d3e9033dd2e98b5496df6cad397aaadbb extends Twig_Template
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
        $__internal_3f9888a2fc0c22cca77b4e1d8c8fb58680ae9dd575bb098e2a1f4099d127c256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9888a2fc0c22cca77b4e1d8c8fb58680ae9dd575bb098e2a1f4099d127c256->enter($__internal_3f9888a2fc0c22cca77b4e1d8c8fb58680ae9dd575bb098e2a1f4099d127c256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7bb9d3aed298325e178df5e23624a77f6b91e21f432f1dc9a99205f7b1526244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb9d3aed298325e178df5e23624a77f6b91e21f432f1dc9a99205f7b1526244->enter($__internal_7bb9d3aed298325e178df5e23624a77f6b91e21f432f1dc9a99205f7b1526244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3f9888a2fc0c22cca77b4e1d8c8fb58680ae9dd575bb098e2a1f4099d127c256->leave($__internal_3f9888a2fc0c22cca77b4e1d8c8fb58680ae9dd575bb098e2a1f4099d127c256_prof);

        
        $__internal_7bb9d3aed298325e178df5e23624a77f6b91e21f432f1dc9a99205f7b1526244->leave($__internal_7bb9d3aed298325e178df5e23624a77f6b91e21f432f1dc9a99205f7b1526244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}

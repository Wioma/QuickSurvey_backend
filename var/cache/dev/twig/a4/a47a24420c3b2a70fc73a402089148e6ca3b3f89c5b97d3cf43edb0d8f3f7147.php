<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8fcb6db4fd6a4759b873fb78826df29342b9ba70a190b696f354a8bef84e537d extends Twig_Template
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
        $__internal_c5720e13e54b7a97ff9eab7f3c77844df4cbabf61459ef43949550e08b400f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5720e13e54b7a97ff9eab7f3c77844df4cbabf61459ef43949550e08b400f51->enter($__internal_c5720e13e54b7a97ff9eab7f3c77844df4cbabf61459ef43949550e08b400f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_07c964014e8f015c8cdfa86f80200f9717b8048ec19f1194730a9457a5e62501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c964014e8f015c8cdfa86f80200f9717b8048ec19f1194730a9457a5e62501->enter($__internal_07c964014e8f015c8cdfa86f80200f9717b8048ec19f1194730a9457a5e62501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c5720e13e54b7a97ff9eab7f3c77844df4cbabf61459ef43949550e08b400f51->leave($__internal_c5720e13e54b7a97ff9eab7f3c77844df4cbabf61459ef43949550e08b400f51_prof);

        
        $__internal_07c964014e8f015c8cdfa86f80200f9717b8048ec19f1194730a9457a5e62501->leave($__internal_07c964014e8f015c8cdfa86f80200f9717b8048ec19f1194730a9457a5e62501_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

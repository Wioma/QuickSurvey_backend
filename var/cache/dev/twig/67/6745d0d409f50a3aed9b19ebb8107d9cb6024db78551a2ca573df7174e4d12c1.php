<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_96d76cf67558d2e049828069e92c141614ca172746223284ca8abdbec6cf362b extends Twig_Template
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
        $__internal_2c6fb7a863675209c18d94d19f24dd2c2ad2ef510f5993dc8c80cee42bf881c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6fb7a863675209c18d94d19f24dd2c2ad2ef510f5993dc8c80cee42bf881c3->enter($__internal_2c6fb7a863675209c18d94d19f24dd2c2ad2ef510f5993dc8c80cee42bf881c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_eabb3dc06055aeb40d4d399de6b9f589702c334449f817946e467e7448b0d0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabb3dc06055aeb40d4d399de6b9f589702c334449f817946e467e7448b0d0fa->enter($__internal_eabb3dc06055aeb40d4d399de6b9f589702c334449f817946e467e7448b0d0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2c6fb7a863675209c18d94d19f24dd2c2ad2ef510f5993dc8c80cee42bf881c3->leave($__internal_2c6fb7a863675209c18d94d19f24dd2c2ad2ef510f5993dc8c80cee42bf881c3_prof);

        
        $__internal_eabb3dc06055aeb40d4d399de6b9f589702c334449f817946e467e7448b0d0fa->leave($__internal_eabb3dc06055aeb40d4d399de6b9f589702c334449f817946e467e7448b0d0fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}

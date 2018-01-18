<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a909397718edccd4ba9150988bbc72a1790768be83add05380e94b56b43e6081 extends Twig_Template
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
        $__internal_43e91029de5854a4b8807b5ce98d28583124beccc75baddb6088efd065b913e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e91029de5854a4b8807b5ce98d28583124beccc75baddb6088efd065b913e1->enter($__internal_43e91029de5854a4b8807b5ce98d28583124beccc75baddb6088efd065b913e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b83868738d48e0013df6740d7652e709f768d9d43011fb4d8849892ccb723f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83868738d48e0013df6740d7652e709f768d9d43011fb4d8849892ccb723f25->enter($__internal_b83868738d48e0013df6740d7652e709f768d9d43011fb4d8849892ccb723f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_43e91029de5854a4b8807b5ce98d28583124beccc75baddb6088efd065b913e1->leave($__internal_43e91029de5854a4b8807b5ce98d28583124beccc75baddb6088efd065b913e1_prof);

        
        $__internal_b83868738d48e0013df6740d7652e709f768d9d43011fb4d8849892ccb723f25->leave($__internal_b83868738d48e0013df6740d7652e709f768d9d43011fb4d8849892ccb723f25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}

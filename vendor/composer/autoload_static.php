<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8586654943a022bbac84c6dbdb208381
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpDocumentor\\Reflection\\' => 25,
        ),
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
        'U' => 
        array (
            'Ubuntu\\AnsibleConfigMgt\\' => 24,
        ),
        'P' => 
        array (
            'Prophecy\\' => 9,
            'PHPStan\\PhpDocParser\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Instantiator\\' => 22,
            'Doctrine\\Deprecations\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpDocumentor\\Reflection\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpdocumentor/reflection-common/src',
            1 => __DIR__ . '/..' . '/phpdocumentor/reflection-docblock/src',
            2 => __DIR__ . '/..' . '/phpdocumentor/type-resolver/src',
        ),
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Ubuntu\\AnsibleConfigMgt\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Prophecy\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpspec/prophecy/src/Prophecy',
        ),
        'PHPStan\\PhpDocParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpstan/phpdoc-parser/src',
        ),
        'Doctrine\\Instantiator\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/instantiator/src/Doctrine/Instantiator',
        ),
        'Doctrine\\Deprecations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/deprecations/lib/Doctrine/Deprecations',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPUnit_Framework_MockObject_BadMethodCallException' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Exception/BadMethodCallException.php',
        'PHPUnit_Framework_MockObject_Builder_Identity' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Builder/Identity.php',
        'PHPUnit_Framework_MockObject_Builder_InvocationMocker' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Builder/InvocationMocker.php',
        'PHPUnit_Framework_MockObject_Builder_Match' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Builder/Match.php',
        'PHPUnit_Framework_MockObject_Builder_MethodNameMatch' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Builder/MethodNameMatch.php',
        'PHPUnit_Framework_MockObject_Builder_Namespace' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Builder/Namespace.php',
        'PHPUnit_Framework_MockObject_Builder_ParametersMatch' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Builder/ParametersMatch.php',
        'PHPUnit_Framework_MockObject_Builder_Stub' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Builder/Stub.php',
        'PHPUnit_Framework_MockObject_Exception' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Exception/Exception.php',
        'PHPUnit_Framework_MockObject_Generator' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Generator.php',
        'PHPUnit_Framework_MockObject_Invocation' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Invocation.php',
        'PHPUnit_Framework_MockObject_InvocationMocker' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/InvocationMocker.php',
        'PHPUnit_Framework_MockObject_Invocation_Object' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Invocation/Object.php',
        'PHPUnit_Framework_MockObject_Invocation_Static' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Invocation/Static.php',
        'PHPUnit_Framework_MockObject_Invokable' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Invokable.php',
        'PHPUnit_Framework_MockObject_Matcher' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher.php',
        'PHPUnit_Framework_MockObject_Matcher_AnyInvokedCount' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/AnyInvokedCount.php',
        'PHPUnit_Framework_MockObject_Matcher_AnyParameters' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/AnyParameters.php',
        'PHPUnit_Framework_MockObject_Matcher_ConsecutiveParameters' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/ConsecutiveParameters.php',
        'PHPUnit_Framework_MockObject_Matcher_Invocation' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/Invocation.php',
        'PHPUnit_Framework_MockObject_Matcher_InvokedAtIndex' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/InvokedAtIndex.php',
        'PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastCount' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/InvokedAtLeastCount.php',
        'PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastOnce' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/InvokedAtLeastOnce.php',
        'PHPUnit_Framework_MockObject_Matcher_InvokedAtMostCount' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/InvokedAtMostCount.php',
        'PHPUnit_Framework_MockObject_Matcher_InvokedCount' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/InvokedCount.php',
        'PHPUnit_Framework_MockObject_Matcher_InvokedRecorder' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/InvokedRecorder.php',
        'PHPUnit_Framework_MockObject_Matcher_MethodName' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/MethodName.php',
        'PHPUnit_Framework_MockObject_Matcher_Parameters' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/Parameters.php',
        'PHPUnit_Framework_MockObject_Matcher_StatelessInvocation' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Matcher/StatelessInvocation.php',
        'PHPUnit_Framework_MockObject_MockBuilder' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/MockBuilder.php',
        'PHPUnit_Framework_MockObject_MockObject' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/MockObject.php',
        'PHPUnit_Framework_MockObject_RuntimeException' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Exception/RuntimeException.php',
        'PHPUnit_Framework_MockObject_Stub' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Stub.php',
        'PHPUnit_Framework_MockObject_Stub_ConsecutiveCalls' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Stub/ConsecutiveCalls.php',
        'PHPUnit_Framework_MockObject_Stub_Exception' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Stub/Exception.php',
        'PHPUnit_Framework_MockObject_Stub_MatcherCollection' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Stub/MatcherCollection.php',
        'PHPUnit_Framework_MockObject_Stub_Return' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Stub/Return.php',
        'PHPUnit_Framework_MockObject_Stub_ReturnArgument' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Stub/ReturnArgument.php',
        'PHPUnit_Framework_MockObject_Stub_ReturnCallback' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Stub/ReturnCallback.php',
        'PHPUnit_Framework_MockObject_Stub_ReturnSelf' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Stub/ReturnSelf.php',
        'PHPUnit_Framework_MockObject_Stub_ReturnValueMap' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Stub/ReturnValueMap.php',
        'PHPUnit_Framework_MockObject_Verifiable' => __DIR__ . '/..' . '/phpunit/phpunit-mock-objects/src/Framework/MockObject/Verifiable.php',
        'SebastianBergmann\\Comparator\\ArrayComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ArrayComparator.php',
        'SebastianBergmann\\Comparator\\Comparator' => __DIR__ . '/..' . '/sebastian/comparator/src/Comparator.php',
        'SebastianBergmann\\Comparator\\ComparisonFailure' => __DIR__ . '/..' . '/sebastian/comparator/src/ComparisonFailure.php',
        'SebastianBergmann\\Comparator\\DOMNodeComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/DOMNodeComparator.php',
        'SebastianBergmann\\Comparator\\DateTimeComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/DateTimeComparator.php',
        'SebastianBergmann\\Comparator\\DoubleComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/DoubleComparator.php',
        'SebastianBergmann\\Comparator\\ExceptionComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ExceptionComparator.php',
        'SebastianBergmann\\Comparator\\Factory' => __DIR__ . '/..' . '/sebastian/comparator/src/Factory.php',
        'SebastianBergmann\\Comparator\\MockObjectComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/MockObjectComparator.php',
        'SebastianBergmann\\Comparator\\NumericComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/NumericComparator.php',
        'SebastianBergmann\\Comparator\\ObjectComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ObjectComparator.php',
        'SebastianBergmann\\Comparator\\ResourceComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ResourceComparator.php',
        'SebastianBergmann\\Comparator\\ScalarComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/ScalarComparator.php',
        'SebastianBergmann\\Comparator\\SplObjectStorageComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/SplObjectStorageComparator.php',
        'SebastianBergmann\\Comparator\\TypeComparator' => __DIR__ . '/..' . '/sebastian/comparator/src/TypeComparator.php',
        'SebastianBergmann\\Diff\\Chunk' => __DIR__ . '/..' . '/sebastian/diff/src/Chunk.php',
        'SebastianBergmann\\Diff\\Diff' => __DIR__ . '/..' . '/sebastian/diff/src/Diff.php',
        'SebastianBergmann\\Diff\\Differ' => __DIR__ . '/..' . '/sebastian/diff/src/Differ.php',
        'SebastianBergmann\\Diff\\LCS\\LongestCommonSubsequence' => __DIR__ . '/..' . '/sebastian/diff/src/LCS/LongestCommonSubsequence.php',
        'SebastianBergmann\\Diff\\LCS\\MemoryEfficientImplementation' => __DIR__ . '/..' . '/sebastian/diff/src/LCS/MemoryEfficientLongestCommonSubsequenceImplementation.php',
        'SebastianBergmann\\Diff\\LCS\\TimeEfficientImplementation' => __DIR__ . '/..' . '/sebastian/diff/src/LCS/TimeEfficientLongestCommonSubsequenceImplementation.php',
        'SebastianBergmann\\Diff\\Line' => __DIR__ . '/..' . '/sebastian/diff/src/Line.php',
        'SebastianBergmann\\Diff\\Parser' => __DIR__ . '/..' . '/sebastian/diff/src/Parser.php',
        'SebastianBergmann\\Exporter\\Exporter' => __DIR__ . '/..' . '/sebastian/exporter/src/Exporter.php',
        'SebastianBergmann\\RecursionContext\\Context' => __DIR__ . '/..' . '/sebastian/recursion-context/src/Context.php',
        'SebastianBergmann\\RecursionContext\\Exception' => __DIR__ . '/..' . '/sebastian/recursion-context/src/Exception.php',
        'SebastianBergmann\\RecursionContext\\InvalidArgumentException' => __DIR__ . '/..' . '/sebastian/recursion-context/src/InvalidArgumentException.php',
        'Text_Template' => __DIR__ . '/..' . '/phpunit/php-text-template/src/Template.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8586654943a022bbac84c6dbdb208381::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8586654943a022bbac84c6dbdb208381::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8586654943a022bbac84c6dbdb208381::$classMap;

        }, null, ClassLoader::class);
    }
}

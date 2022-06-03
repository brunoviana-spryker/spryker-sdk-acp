<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Transfer;

use ArrayObject;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RecipeTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const LOADED_RECIPE = 'loadedRecipe';

    /**
     * @var string
     */
    public const CHECKER_MESSAGES = 'checkerMessages';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var array
     */
    protected $loadedRecipe = [];

    /**
     * @var \ArrayObject|\Transfer\CheckerMessageTransfer[]
     */
    protected $checkerMessages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'loaded_recipe' => 'loadedRecipe',
        'loadedRecipe' => 'loadedRecipe',
        'LoadedRecipe' => 'loadedRecipe',
        'checker_messages' => 'checkerMessages',
        'checkerMessages' => 'checkerMessages',
        'CheckerMessages' => 'checkerMessages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOADED_RECIPE => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'loaded_recipe',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHECKER_MESSAGES => [
            'type' => 'Transfer\CheckerMessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'checker_messages',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module Acp
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module Acp
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Acp
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module Acp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module Acp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module Acp
     *
     * @param array|null $loadedRecipe
     *
     * @return $this
     */
    public function setLoadedRecipe(array $loadedRecipe = null)
    {
        if ($loadedRecipe === null) {
            $loadedRecipe = [];
        }

        $this->loadedRecipe = $loadedRecipe;
        $this->modifiedProperties[self::LOADED_RECIPE] = true;

        return $this;
    }

    /**
     * @module Acp
     *
     * @return array
     */
    public function getLoadedRecipe()
    {
        return $this->loadedRecipe;
    }

    /**
     * @module Acp
     *
     * @param mixed $loadedRecipe
     *
     * @return $this
     */
    public function addLoadedRecipe($loadedRecipe)
    {
        $this->loadedRecipe[] = $loadedRecipe;
        $this->modifiedProperties[self::LOADED_RECIPE] = true;

        return $this;
    }

    /**
     * @module Acp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLoadedRecipe()
    {
        $this->assertPropertyIsSet(self::LOADED_RECIPE);

        return $this;
    }

    /**
     * @module Acp
     *
     * @param \ArrayObject|\Transfer\CheckerMessageTransfer[] $checkerMessages
     *
     * @return $this
     */
    public function setCheckerMessages(ArrayObject $checkerMessages)
    {
        $this->checkerMessages = $checkerMessages;
        $this->modifiedProperties[self::CHECKER_MESSAGES] = true;

        return $this;
    }

    /**
     * @module Acp
     *
     * @return \ArrayObject|\Transfer\CheckerMessageTransfer[]
     */
    public function getCheckerMessages()
    {
        return $this->checkerMessages;
    }

    /**
     * @module Acp
     *
     * @param \Transfer\CheckerMessageTransfer $checkerMessage
     *
     * @return $this
     */
    public function addCheckerMessage(CheckerMessageTransfer $checkerMessage)
    {
        $this->checkerMessages[] = $checkerMessage;
        $this->modifiedProperties[self::CHECKER_MESSAGES] = true;

        return $this;
    }

    /**
     * @module Acp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCheckerMessages()
    {
        $this->assertCollectionPropertyIsSet(self::CHECKER_MESSAGES);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'name':
                case 'loadedRecipe':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'checkerMessages':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'name':
                case 'loadedRecipe':
                    $values[$arrayKey] = $value;

                    break;
                case 'checkerMessages':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'name':
                case 'loadedRecipe':
                    $values[$arrayKey] = $value;

                    break;
                case 'checkerMessages':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
        $this->checkerMessages = $this->checkerMessages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name,
            'loadedRecipe' => $this->loadedRecipe,
            'checkerMessages' => $this->checkerMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'loaded_recipe' => $this->loadedRecipe,
            'checker_messages' => $this->checkerMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'loaded_recipe' => $this->loadedRecipe instanceof AbstractTransfer ? $this->loadedRecipe->toArray(true, false) : $this->loadedRecipe,
            'checker_messages' => $this->checkerMessages instanceof AbstractTransfer ? $this->checkerMessages->toArray(true, false) : $this->addValuesToCollection($this->checkerMessages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'loadedRecipe' => $this->loadedRecipe instanceof AbstractTransfer ? $this->loadedRecipe->toArray(true, true) : $this->loadedRecipe,
            'checkerMessages' => $this->checkerMessages instanceof AbstractTransfer ? $this->checkerMessages->toArray(true, true) : $this->addValuesToCollection($this->checkerMessages, true, true),
        ];
    }
}

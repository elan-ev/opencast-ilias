<?php

namespace srag\CustomInputGUIs\OpenCast\LearningProgressPieUI;

use srag\DIC\OpenCast\DICTrait;

/**
 * Class LearningProgressPieUI
 *
 * @package srag\CustomInputGUIs\OpenCast\LearningProgressPieUI
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class LearningProgressPieUI
{

    use DICTrait;


    /**
     * LearningProgressPieUI constructor
     */
    public function __construct()
    {

    }


    /**
     * @return CountLearningProgressPieUI
     */
    public function count() : CountLearningProgressPieUI
    {
        return new CountLearningProgressPieUI();
    }


    /**
     * @return ObjIdsLearningProgressPieUI
     */
    public function objIds() : ObjIdsLearningProgressPieUI
    {
        return new ObjIdsLearningProgressPieUI();
    }


    /**
     * @return UsrIdsLearningProgressPieUI
     */
    public function usrIds() : UsrIdsLearningProgressPieUI
    {
        return new UsrIdsLearningProgressPieUI();
    }
}

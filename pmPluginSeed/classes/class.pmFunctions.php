<?php
/**
 * class.flashviewer.pmFunctions.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.
 * *
 */

////////////////////////////////////////////////////
// flashviewer PM Functions
//
// Copyright (C) 2007 COLOSA
//
// License: LGPL, see LICENSE
////////////////////////////////////////////////////

function flashviewer_getMyCurrentDate()
{
    return G::CurDate('Y-m-d');
}

function flashviewer_getMyCurrentTime()
{
    return G::CurDate('H:i:s');
}

<?php

namespace Bolideai\VerifyBolide;

use Bolideai\VerifyBolide\Util;
use Illuminate\Support\Facades\Hash;

trait TestsVerifyBolideTrait
{
    public function withVerifyBolideHeader()
    {
        $this->withHeader('X-Header-BolideAI-Access', Hash::make(Util::combinedKey()));
    }
}

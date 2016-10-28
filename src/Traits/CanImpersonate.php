<?php


namespace Nckg\Impersonate\Traits;


trait CanImpersonate
{
    /**
     * @var string
     */
    protected $impersonateKey = 'impersonate';

    /**
     * Set the id of the user we're impersonating
     *
     * @param $id
     */
    public function setImpersonating($id)
    {
        \Session::put($this->impersonateKey, $id);
    }

    /**
     * Stop impersonating a user
     *
     */
    public function stopImpersonating()
    {
       \Session::forget($this->impersonateKey);
    }

    /**
     * Check if you are impersonating a user
     *
     * @return bool
     */
    public function isImpersonating()
    {
        return \Session::has($this->impersonateKey);
    }
}
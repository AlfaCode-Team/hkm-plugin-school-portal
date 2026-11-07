<?php

declare(strict_types=1);

namespace Plugins\SchoolPortal\API\Contracts;

/**
 * Published contract for `school.portal`.
 *
 * The parent and pupil space: profile, bulletins, receipts, payment methods and delay requests.
 *
 * Legacy source : student/ — profile.php, student_bulletin.php, student_receipts.php, payment_methods.php, requests/
 * Legacy tables : (no tables of its own — reads across fees, bulletin, attendance)
 *
 * Consumers declare `"requires": ["school.portal"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolPortalContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}

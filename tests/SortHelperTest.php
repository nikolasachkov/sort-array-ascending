<?php

use App\SortHelper;

it('sorts array ascending with 9s in front', function () {
    expect(SortHelper::sortArrayAscending([3, 1, 9, 2, 9]))
        ->toBe([9, 9, 1, 2, 3]);
});

it('works with no 9s', function () {
    expect(SortHelper::sortArrayAscending([4, 2, 8]))
        ->toBe([2, 4, 8]);
});

it('works with only 9s', function () {
    expect(SortHelper::sortArrayAscending([9, 9, 9]))
        ->toBe([9, 9, 9]);
});

it('works with an empty array', function () {
    expect(SortHelper::sortArrayAscending([]))
        ->toBe([]);
});

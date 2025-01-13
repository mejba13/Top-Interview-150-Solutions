from typing import List

class Solution:
    def majorityElement(self, nums: List[int]) -> int:

        candidate = None
        count = 0

        for num in nums:
            if count == 0:
                candidate = num
            count += 1 if num == candidate else -1
        return candidate

solution = Solution()

# Test cases
test_cases = [
    ([3, 2, 3], 3),
    ([2, 2, 1, 1, 1, 2, 2], 2),
    ([1], 1),
]


for i, (nums, expected) in enumerate(test_cases, 1):
    result = solution.majorityElement(nums)
    print(f"Test Case {i}: {'Passed' if result == expected else 'Failed'}")

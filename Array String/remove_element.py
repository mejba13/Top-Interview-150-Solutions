from typing import List

class Solution:
    def majorityElement(self, nums: List[int]) -> int:
        count = 0
        candidate = None

        for num in nums:
            if count == 0:
                candidate = num
            count += 1 if num == candidate else -1

        return candidate

# Test cases
nums_list = [
    [3, 2, 3],
    [2, 2, 1, 1, 1, 2, 2],
]

solution = Solution()
for i, nums in enumerate(nums_list, 1):
    print(f"Test Case {i}: Input: {nums}, Output: {solution.majorityElement(nums)}")

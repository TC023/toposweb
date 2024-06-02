stuff = [1, 2, 3, 4, 5, 6]

arr1 = []
arr2 = []
arr3 = []
arr4 = []

arrays = [arr1, arr2, arr3, arr4]

# Distribute items in a round-robin fashion
for i, item in enumerate(stuff):
    arrays[i % 4].append(item)

print(arr1, arr2, arr3, arr4)
